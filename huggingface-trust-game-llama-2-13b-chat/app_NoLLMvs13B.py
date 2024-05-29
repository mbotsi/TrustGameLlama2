# externalID (from database) and PROLIFIC_PID (from URL parameters as query parameter)

# Original code from https://huggingface.co/spaces/huggingface-projects/llama-2-13b-chat
# Modified for trust game purposes

import gradio as gr
import time
import random
import json
import mysql.connector
import os
import csv
import spaces
import torch

from transformers import AutoModelForCausalLM, AutoTokenizer, TextIteratorStreamer
from threading import Thread
from typing import Iterator
from huggingface_hub import Repository, hf_hub_download
from datetime import datetime

# for fetch_personalized_data
import mysql.connector
import urllib.parse
import urllib.request

# for saving chat history as JSON - not used 
import atexit
import os
from huggingface_hub import HfApi, HfFolder

# for saving chat history as dataset - not used
import huggingface_hub
from huggingface_hub import Repository
from datetime import datetime

# for saving chat history as dataset - used 
import sqlite3
import huggingface_hub
import gradio as gr
import pandas as pd
import shutil
import os
import datetime
from apscheduler.schedulers.background import BackgroundScheduler


DATASET_REPO_URL = "https://huggingface.co/datasets/botsi/trust-game-llama-2-chat-history"
DATA_DIRECTORY = "data"  # Separate directory for storing data files
DATA_FILENAME = "13b.csv"  # Default filename
DATA_FILE = os.path.join("data", DATA_FILENAME)

DB_PASSWORD = os.environ.get("DB_PASSWORD")

HF_TOKEN = os.environ.get("HF_TOKEN")
print("is none?", HF_TOKEN is None)
print("hfh", huggingface_hub.__version__)

repo = Repository(
    local_dir=DATA_DIRECTORY, clone_from=DATASET_REPO_URL
)

MAX_MAX_NEW_TOKENS = 2048
DEFAULT_MAX_NEW_TOKENS = 1024
MAX_INPUT_TOKEN_LENGTH = int(os.getenv("MAX_INPUT_TOKEN_LENGTH", "4096"))

DESCRIPTION = """\
# This is your personal space to chat. 
You can ask anything: From discussing strategic game tactics to enjoying casual conversation. 
For example you could ask, what happened in the last round, what is your probability to win when you invest amount xy, what is my current balance etc.
"""

# License and Acceptable Use Policy by Meta  
LICENSE = """
<p/>

---
This demo is governed by the [original license](https://ai.meta.com/llama/license/) and [acceptable use policy](https://ai.meta.com/llama/use-policy/). 
The most recent copy of this policy can be found at ai.meta.com/llama/use-policy.
"""

if not torch.cuda.is_available():
    DESCRIPTION += "\n<p>Running on CPU 🥶 This demo does not work on CPU.</p>"


if torch.cuda.is_available():
    model_id = "meta-llama/Llama-2-13b-chat-hf"
    #model = AutoModelForCausalLM.from_pretrained(model_id, device_map="auto", load_in_4bit=True)
    model = AutoModelForCausalLM.from_pretrained(model_id, torch_dtype=torch.float16, device_map="auto")
    tokenizer = AutoTokenizer.from_pretrained(model_id)
    tokenizer.use_default_system_prompt = False


def fetch_personalized_data(externalID):
    try:
        # Connect to the database
        with mysql.connector.connect(
            host="3.125.179.74",
            user="root",
            password=DB_PASSWORD,
            database="lionessdb"
        ) as conn:
            # Create a cursor object
            with conn.cursor() as cursor:
                # Query to fetch relevant data from both tables based on externalID = externalID  
                query = """
                    SELECT e5390g38028_core.playerNr, 
                           e5390g38028_core.groupNrStart, 
                           e5390g38028_core.subjectNr, 
                           e5390g38028_core.onPage, 
                           e5390g38028_core.role,
                           e5390g38028_session.externalID, 
                           e5390g38028_decisions.initialCredit,
                           e5390g38028_decisions.part,
                           e5390g38028_decisions.transfer1,
                           e5390g38028_decisions.tripledAmount1,
                           e5390g38028_decisions.keptForSelf1,
                           e5390g38028_decisions.returned1,
                           e5390g38028_decisions.totalRound1, 
                           e5390g38028_decisions.transfer2,
                           e5390g38028_decisions.tripledAmount2,
                           e5390g38028_decisions.keptForSelf2,
                           e5390g38028_decisions.returned2,
                           e5390g38028_decisions.totalRound2, 
                           e5390g38028_decisions.transfer3, 
                           e5390g38028_decisions.tripledAmount3, 
                           e5390g38028_decisions.keptForSelf3, 
                           e5390g38028_decisions.returned3, 
                           e5390g38028_decisions.totalRound3, 
                           e5390g38028_decisions.transfer4, 
                           e5390g38028_decisions.tripledAmount4, 
                           e5390g38028_decisions.keptForSelf4, 
                           e5390g38028_decisions.returned4,
                           e5390g38028_decisions.totalRound4, 
                           e5390g38028_decisions.transfer5, 
                           e5390g38028_decisions.tripledAmount5, 
                           e5390g38028_decisions.keptForSelf5, 
                           e5390g38028_decisions.returned5, 
                           e5390g38028_decisions.totalRound5, 
                           e5390g38028_decisions.transfer6, 
                           e5390g38028_decisions.tripledAmount6, 
                           e5390g38028_decisions.keptForSelf6
                    FROM e5390g38028_core
                    JOIN e5390g38028_session ON 
                         e5390g38028_core.playerNr = e5390g38028_session.playerNr
                    JOIN e5390g38028_decisions ON 
                         e5390g38028_core.playerNr = e5390g38028_decisions.playerNr
                    WHERE e5390g38028_session.externalID = %s
                    UNION ALL
                    SELECT e5390g38028_core.playerNr, 
                           e5390g38028_core.groupNrStart, 
                           e5390g38028_core.subjectNr, 
                           e5390g38028_core.onPage, 
                           e5390g38028_core.role,
                           e5390g38028_session.externalID, 
                           e5390g38028_decisions.initialCredit,
                           e5390g38028_decisions.part,
                           e5390g38028_decisions.transfer1,
                           e5390g38028_decisions.tripledAmount1,
                           e5390g38028_decisions.keptForSelf1,
                           e5390g38028_decisions.returned1,
                           e5390g38028_decisions.totalRound1, 
                           e5390g38028_decisions.transfer2,
                           e5390g38028_decisions.tripledAmount2,
                           e5390g38028_decisions.keptForSelf2,
                           e5390g38028_decisions.returned2,
                           e5390g38028_decisions.totalRound2, 
                           e5390g38028_decisions.transfer3, 
                           e5390g38028_decisions.tripledAmount3, 
                           e5390g38028_decisions.keptForSelf3, 
                           e5390g38028_decisions.returned3, 
                           e5390g38028_decisions.totalRound3, 
                           e5390g38028_decisions.transfer4, 
                           e5390g38028_decisions.tripledAmount4, 
                           e5390g38028_decisions.keptForSelf4, 
                           e5390g38028_decisions.returned4,
                           e5390g38028_decisions.totalRound4, 
                           e5390g38028_decisions.transfer5, 
                           e5390g38028_decisions.tripledAmount5, 
                           e5390g38028_decisions.keptForSelf5, 
                           e5390g38028_decisions.returned5, 
                           e5390g38028_decisions.totalRound5, 
                           e5390g38028_decisions.transfer6, 
                           e5390g38028_decisions.tripledAmount6, 
                           e5390g38028_decisions.keptForSelf6
                    FROM e5390g38028_core
                    JOIN e5390g38028_session ON 
                        e5390g38028_core.playerNr = e5390g38028_session.playerNr
                    JOIN e5390g38028_decisions 
                        ON e5390g38028_core.playerNr = e5390g38028_decisions.playerNr
                    WHERE e5390g38028_core.groupNrStart IN (
                        SELECT DISTINCT groupNrStart
                        FROM e5390g38028_core
                        JOIN e5390g38028_session 
                            ON e5390g38028_core.playerNr = e5390g38028_session.playerNr
                        WHERE e5390g38028_session.externalID = %s
                    ) AND e5390g38028_session.externalID != %s
                """
                cursor.execute(query,(externalID, externalID, externalID))
                # Fetch data row by row
                data = [{
                    'playerNr': row[0], 
                    'groupNrStart': row[1], 
                    'subjectNr': row[2], 
                    'onPage': row[3],
                    'role': row[4],
                    'externalID': row[5],
                    'initialCredit': row[6],
                    'part': row[7],
                    'transfer1': row[8],
                    'tripledAmount1': row[9],
                    'keptForSelf1': row[10],
                    'returned1': row[11],
                    'totalRound1': row[12],
                    'transfer2': row[13],
                    'tripledAmount2': row[14],
                    'keptForSelf2': row[15],
                    'returned2': row[16],
                    'totalRound2': row[17],
                    'transfer3': row[18],
                    'tripledAmount3': row[19],
                    'keptForSelf3': row[20],
                    'returned3': row[21],
                    'totalRound3': row[22],
                    'transfer4': row[23],
                    'tripledAmount4': row[24],
                    'keptForSelf4': row[25],
                    'returned4': row[26],
                    'totalRound4': row[27],
                    'transfer5': row[28],
                    'tripledAmount5': row[29],
                    'keptForSelf5': row[30],
                    'returned5': row[31],
                    'totalRound5': row[32],
                    'transfer6': row[33],
                    'tripledAmount6': row[34],
                    'keptForSelf6': row[35]
                } for row in cursor]
                print(data)
                return data
    except mysql.connector.Error as err:
        print(f"Error: {err}")
        return None
    
def extract_variables(all_personalized_data, part):
    extracted_data = {}

    if part == "1":
        rounds = range(1, 4)  # Rounds 1-3 for part 1
    elif part == "2":
        rounds = range(4, 7)  # Rounds 4-6 for part 2 
    else:
        print("No data for the particular part found")
        return None

    for data in all_personalized_data:
        role = map_role(str(data.get('role', 'unknown')))  # Get the role description
        player_data = {}  # Store data for the current player
        for round_num in rounds:
            round_key = f'round{round_num - 3 if part == "2" else round_num}'  # Adjusting round numbers if part is 2
            player_data[round_key] = {}
            for var in ['transfer', 'tripledAmount', 'keptForSelf', 'returned', 'totalRound']:
                var_name = f'{var}{round_num}'
                if role == 'The Dealer' and var == 'tripledAmount':
                    continue  # Skip adding 'tripledAmount' for the Dealer
                if role == 'The Investor' and var == 'keptForSelf':
                    continue  # Skip adding 'keptForSelf' for the Investor
                if data.get(var_name) is not None:
                    player_data[round_key][var] = data[var_name]

        # Update extracted_data with role prompt as key
        if role in extracted_data:
            extracted_data[role].update(player_data)
        else:
            extracted_data[role] = player_data

    return extracted_data


def map_onPage(onPage):
    # Define the mapping of onPage values to onPage_filename and onPage_prompt
    onPage_mapping_dict = {
        "stage412359.php": ("stage 6", "Round 1: Investor’s turn"),
        "stage412360.php": ("stage 7", "Round 1: Dealer’s turn"),
        "stage412361.php": ("stage 8", "Round 2: Investor’s turn"),
        "stage412362.php": ("stage 9", "Round 2: Dealer's turn"),
        "stage412363.php": ("stage 10", "Round 3: Investor’s turn"),
        "stage412364.php": ("stage 11", "Round 3: Dealer’s turn"),
        "stage412366.php": ("stage 13", "Round 1: Investor’s turn"),
        "stage412367.php": ("stage 14", "Round 1: Dealer’s turn"),
        "stage412368.php": ("stage 15", "Round 2: Investor’s turn"),
        "stage412369.php": ("stage 16", "Round 2: Dealer's turn"),
        "stage412370.php": ("stage 17", "Round 3: Investor’s turn"),
        "stage412371.php": ("stage 18", "Round 3: Dealer’s turn"),
    }
    # Check if onPage is in the mapping
    if onPage in onPage_mapping_dict:
        onPage_filename, onPage_prompt = onPage_mapping_dict[onPage]
    else:
        # If onPage is not in the mapping, set onPage_filename and onPage_prompt to "unknown"
        onPage_filename, onPage_prompt = "unknown", "unknown"
    return onPage_filename, onPage_prompt

def map_role(role):
    # Define the mapping of role numbers to role descriptions
    role_mapping_dict = {
        "1": "The Investor",
        "2": "The Dealer"
    }
    # Check if the role is in the mapping
    if role in role_mapping_dict:
        role_prompt = role_mapping_dict[role]
    else:
        # If the role is not in the mapping, set role_prompt to "unknown"
        role_prompt = "unknown"
    return role_prompt
  
def get_default_system_prompt(extracted_data, onPage_prompt, role_prompt):
    #BOS, EOS = "<s>", "</s>" 
    #BINST, EINST = "[INST]", "[/INST]"
    BSYS, ESYS = "<<SYS>>\n", "\n<</SYS>>\n\n"

    DEFAULT_SYSTEM_PROMPT = f""" You are a smart game assistant for a Trust Game outside of this chat. 
        Trust Game rules: Two players, The Investor and The Dealer, each play to maximize their own earnings. 
        There are 3 rounds. Every round follows the same pattern. 
        1. Each player gets a virtual starting credit of 10 coins. 
        2. Investor's turn: The Investor decides how much they want to invest into a shared pot. The shared pot is tripled automatically before the Dealer's turn.
        3. Dealer's turn: The Dealer can keep and return as much of the tripled amount as they like. Their virtual starting credit remains untouched.
        Earnings from one round are not transferred to the next round. Answer maximum 2 sentences. 
        Answer in a consistent style. If you are unsure about an answer, do not guess. 
        Currently it is {role_prompt}’s turn so you are assisting {role_prompt}. Answer directly to the player. The currency is coins.
        The game is currently in {onPage_prompt}.
        This is what happened in the previous rounds: {extracted_data}. 
    
    Explanation of what happened in the previous rounds:
    - The Investor: Actions taken by The Investor in each round.
      - 'transfer': The amount of coins transferred by The Investor into the shared pot.
      - 'tripledAmount': The total amount of coins in the shared pot after tripling.
      - 'totalRound': The total number of coins remaining with The Investor after the round.
    
    - The Dealer: Represents the actions taken by The Dealer in each round.
      - 'keptForSelf': The amount of coins returned kept to themselves in the round.
      - 'returned': The amount of coins returned to The Investor in the round.
      - 'totalRound': The total number of coins remaining with The dealer after the round.
    
    Based on what happened in previous rounds, you are giving advice on how much to invest to maximize the player’s earnings while minimizing risk.
    Think step-by-step when providing your answer.
    
    Scenario 1: 
    Question: How much should I invest?
    Context: The Investor can invest from 0 to 10 coins but is uncertain about their investment strategy and wants guidance. Look at the tripledAmount and how much was returned from the Dealer in the previous round. If the returned amount is much less than the tripledAmount, advise The Investor to invest less. 
    Supportive Answer: The key is to balance potential earnings with minimizing risk. Considering the current situation, investing up to half of your current balance would be a good choice.
    
    Scenario 2: 
    Question: How much should I return?
    Context: The Dealer wants to know how much of the tripledAmount he should keep for themselves and how much to return to the Investor in order to gain their trust to invest more in the next round. 
    Supportive Response: It is essential to strike a balance between potential gains and preserving your capital. Considering this, investing slightly more than half of the coins would align with a balanced approach.
    
    Scenario 3:
    Question: Considering what happened in the last round, what should I do?
    Context: The player is aiming to maximize their earnings and seeks advice on an aggressive strategy. Find out if the current role is The Dealer or The Investor and give advice accordingly.
    Supportive Response: If you're aiming for maximum profit, investing and keeping a larger amount could potentially yield higher returns. Keep in mind the associated risks in returning coins.
    """

    print(DEFAULT_SYSTEM_PROMPT)
    return DEFAULT_SYSTEM_PROMPT

def construct_input_prompt(chat_history, message, extracted_data, onPage_prompt, role_prompt):
    input_prompt = f"<s>[INST] <<SYS>>\n{get_default_system_prompt(extracted_data, onPage_prompt, role_prompt)}\n<</SYS>>\n\n "
    for user, assistant in chat_history:
        input_prompt += f"{user} [/INST] {assistant} <s>[INST] "
    input_prompt += f"{message} [/INST] "
    return input_prompt

@spaces.GPU
def generate(
    request: gr.Request, # To fetch query params
    message: str,
    chat_history: list[tuple[str, str]],
    # input_prompt: str,
    max_new_tokens: int = 1024,
    temperature: float = 0.6,
    top_p: float = 0.9,
    top_k: int = 50,
    repetition_penalty: float = 1.2,
) -> Iterator[str]: # Change return type hint to Iterator[str]

    conversation = []
    
    # Fetch query params - OLD with gradio sdk = 4.20.0 version 
    params = request.query_params
    print('those are the query params')
    print(params)

    # Fetch query params - NEW with gradio sdk = 4.25.0 version 
    #params = {key: value for key, value in request.query_params.items()}
    #print('those are the query params')
    #print(params)
    
    # Assuming params = request.query_params is the dictionary containing the query parameters    
    # Extract the value of the 'externalID' parameter   
    externalID = params.get('PROLIFIC_PID')
    
    # Check if externalID value is None or contains a value
    if externalID is not None:
        print("PROLIFIC_PID:", externalID)
    else:
        externalID = 'no_externalID'
        print("PROLIFIC_PID not found or has no value.")

    # Fetch personalized data
    #personalized_data = fetch_personalized_data(externalID)
    all_personalized_data = fetch_personalized_data(externalID)

    # Initialize onPage, playerNr, and groupNrStart variables
    onPage = playerNr = groupNrStart = role = part = None
    
    # Iterate over each dictionary in the list
    if all_personalized_data:
        for entry in all_personalized_data:
            # Check if the externalID matches the value in externalID variable (PROLIFIC_PID from the URL parameters)
            if entry['externalID'] == externalID:
                playerNr = entry.get('playerNr', "no_playerNr")  # Retrieve playerNr value
                groupNrStart = entry.get('groupNrStart', "no_groupNrStart")  # Retrieve groupNrStart value
                onPage = entry.get('onPage', "no_onPage")  # Retrieve onPage value
                role = entry.get('role', "no_role")  # Retrieve role value
                part = entry.get('part', "no_part")  # Retrieve part value
                break  # Break the loop since we found the desired entry
    
    # Print the values of onPage, playerNr, and groupNrStart and oart
    print("onPage:", onPage)
    print("playerNr:", playerNr)
    print("groupNrStart:", groupNrStart)
    print("role:", role)
    print("part:", part)
        
    # Print the onPage value
    onPage_filename, onPage_prompt = map_onPage(onPage)
    print("onPage_filename:", onPage_filename)
    print("onPage_prompt:", onPage_prompt)

    # Print the role value 
    role_prompt = map_role(str(role))
    print("role_prompt:", role_prompt)
    
    extracted_data = extract_variables(all_personalized_data, part)
    print(extracted_data)
        
    # Construct the input prompt using the functions from the system_prompt_config module
    input_prompt = construct_input_prompt(chat_history, message, extracted_data, onPage_prompt, role_prompt)

    # Move the condition here after the assignment
    if input_prompt:
        conversation.append({"role": "system", "content": input_prompt})

    # Convert input prompt to tensor
    input_ids = tokenizer(input_prompt, return_tensors="pt").to(model.device)

    for user, assistant in chat_history:
        conversation.extend([{"role": "user", "content": user}, {"role": "assistant", "content": assistant}])
    conversation.append({"role": "user", "content": message})

    input_ids = tokenizer.apply_chat_template(conversation, return_tensors="pt")
    if input_ids.shape[1] > MAX_INPUT_TOKEN_LENGTH:
        input_ids = input_ids[:, -MAX_INPUT_TOKEN_LENGTH:]
        gr.Warning(f"Trimmed input from conversation as it was longer than {MAX_INPUT_TOKEN_LENGTH} tokens.")
    input_ids = input_ids.to(model.device)

    # Set up the TextIteratorStreamer
    streamer = TextIteratorStreamer(tokenizer, timeout=10.0, skip_prompt=True, skip_special_tokens=True)
    
    # Set up the generation arguments
    generate_kwargs = dict(
        {"input_ids": input_ids},
        streamer=streamer,
        max_new_tokens=max_new_tokens,
        do_sample=True,
        top_p=top_p,
        top_k=top_k,
        temperature=temperature,
        num_beams=1,
        repetition_penalty=repetition_penalty,
    )

    # Start the model generation thread
    t = Thread(target=model.generate, kwargs=generate_kwargs)
    t.start()

    # Yield generated text chunks
    outputs = []
    for text in streamer:
        outputs.append(text)
        yield "".join(outputs)

    # Fix bug that last answer is not recorded! 
    # Parse the outputs into a readable sentence and record them
    # Filter out empty strings and join the remaining strings with spaces
    readable_sentence = ' '.join(filter(lambda x: x.strip(), outputs))
    # Print the readable sentence
    print(readable_sentence)

    # Save chat history to .csv file on HuggingFace Hub 
    #pd.DataFrame(conversation).to_csv(DATA_FILE, index=False)
    #print("updating conversation")
    #repo.push_to_hub(blocking=False, commit_message=f"Updating data at {datetime.datetime.now()}")
    #print(conversation)


    # Save chat history to .csv file on HuggingFace Hub 
    # Set the maximum column width to None to prevent truncation
    pd.set_option("display.max_colwidth", None)
    
    # Generate filename with bot id and session id
    filename = f"{groupNrStart}_{playerNr}_{externalID}_{onPage_filename}_{DATA_FILENAME}"
    data_file = os.path.join(DATA_DIRECTORY, filename)
    
    # Generate timestamp
    timestamp = datetime.datetime.now()
    
    # Check if the file already exists
    if os.path.exists(data_file):
        # If file exists, load existing data
        existing_data = pd.read_csv(data_file)
    else:
        # If file doesn't exist, set existing_data to None
        existing_data = None
    
    # Create a DataFrame for the current conversation turn
    turn_data = {
        "turn_id": len(existing_data) + 1 if existing_data is not None else 1,
        "question": message,
        "answer": readable_sentence,
        "timestamp": timestamp,
    }
    turn_df = pd.DataFrame([turn_data])

    # Check if existing_data is not None and concatenate the new conversation turn
    if existing_data is not None:
        updated_data = pd.concat([existing_data, turn_df], ignore_index=True)
    else:
        updated_data = turn_df
        
    # Write the updated data to the CSV file with all fields quoted
    updated_data.to_csv(data_file, index=False, quoting=csv.QUOTE_ALL)
    
    print("Updating .csv")
    repo.push_to_hub(blocking=False, commit_message=f"Updating data at {timestamp}")

css = """
share-button svelte-1lcyrx4 {visibility: hidden}
"""
chat_interface = gr.ChatInterface(
fn=generate,
retry_btn=None,
clear_btn=None,
undo_btn=None,
chatbot=gr.Chatbot(avatar_images=('user.png', 'bot.png'), bubble_full_width = True, elem_id = 'chatbot'), 
)

with gr.Blocks(css="style.css") as demo:
    #gr.Markdown(DESCRIPTION)
    chat_interface.render()
    gr.Markdown(LICENSE)
    
if __name__ == "__main__":
    demo.queue(max_size=20).launch()
    #demo.queue(max_size=20)
    demo.launch(share=True, debug=True)
    