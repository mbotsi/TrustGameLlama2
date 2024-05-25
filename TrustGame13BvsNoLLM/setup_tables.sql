DROP TABLE IF EXISTS  `e5390g37899_globals`;SELECT 1;CREATE TABLE `e5390g37899_globals` (
                  `name` varchar(36) NOT NULL,
                  `value` TEXT NOT NULL
                ) CHARACTER SET utf8;SELECT 1;INSERT INTO `e5390g37899_globals` (`name`, `value`) VALUES ('compiled', '1715115167'),('active', '1'),('testMode', '1'),('totalPlayers', '500'),('groupSize', '2'),('numberPeriods', '1'),('loopStart', ''),('loopEnd', ''),('participationFee', '0'),('exchangeRate', '0'),('reEnter', '0'),('dropoutHandling', '2'),('sortableMatching', '2'),('message0', 'This experiment is currently offline.&amp;nbsp;&lt;p&gt;Unfortunately, you cannot participate at this time.&lt;/p&gt;&lt;p&gt;Thank you for your understanding.&lt;/p&gt;'),('message1', 'According to our records, your device has already been connected to the server during this session. &lt;br&gt;
You are only allowed to enter a session once.&amp;nbsp;&lt;p&gt;&lt;span style=&quot;background-color: rgba(223, 240, 216, 0);&quot;&gt;&lt;br&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgba(223, 240, 216, 0);&quot;&gt;Thank you for your understanding.&lt;/span&gt;&lt;/p&gt;'),('message2', 'We already have sufficient participants for this experiment. &lt;br&gt;
Unfortunately, you cannot participate at this time. &lt;br&gt;&lt;br&gt;
Thank you for your understanding.'),('message3', 'You are currently not logged in.&amp;nbsp;&lt;p&gt;Unfortunately, you cannot participate under those circumstances.&lt;/p&gt;&lt;p&gt;Thank you for your understanding.&lt;/p&gt;'),('message4', 'Unfortunately, this experiment was terminated for a technical reason!&lt;br&gt;
                 You cannot continue.&lt;br&gt;&lt;br&gt;&lt;p&gt;Please &lt;a href=&quot;https://app.prolific.com/submissions/complete?cc=CXNBF0H3&quot;&gt;follow this link to get redirected to Prolific.&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgba(223, 240, 216, 0);&quot;&gt;Thank you for your participation.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;'),('message5', '&lt;p&gt;&lt;span style=&quot;background-color: rgba(223, 240, 216, 0);&quot;&gt;Unfortunately, you did not make a decision before the time was up!&lt;br&gt;&lt;/span&gt;&lt;span style=&quot;background-color: rgba(223, 240, 216, 0);&quot;&gt;You cannot continue.&lt;/span&gt;&lt;/p&gt;You will not receive your participation fee.&amp;nbsp;&lt;p&gt;Please&lt;a href=&quot;https://app.prolific.com/submissions/complete?cc=CC6I7R7J&quot;&gt;follow this link to get redirected to&lt;/a&gt;&lt;a href=&quot;https://app.prolific.com/submissions/complete?cc=C1C3CAMR&quot;&gt;&lt;/a&gt;&lt;a href=&quot;https://app.prolific.com/submissions/complete?cc=CI1SQB85&quot;&gt;&lt;/a&gt; Prolific.&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgba(223, 240, 216, 0);&quot;&gt;Thank you for your understanding.&lt;/span&gt;&lt;/p&gt;'),('message6', 'Unfortunately, your partner dropped out of the experiment!&lt;br&gt;
                 You cannot continue.&lt;br&gt;&lt;p&gt;Please &lt;a href=&quot;https://app.prolific.com/submissions/complete?cc=CVPM44UY&quot;&gt;&lt;a href=&quot;https://app.prolific.com/submissions/complete?cc=C1OE0D20&quot;&gt;follow this link to get redirected to&lt;/a&gt;&lt;/a&gt;&lt;a href=&quot;https://app.prolific.com/submissions/complete?cc=C139838N&quot;&gt;&lt;/a&gt; Prolific.&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgba(223, 240, 216, 0);&quot;&gt;Thank you for your participation.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;'),('message7', 'Our experiment &lt;b&gt;does not support Microsoft Internet Explorer&lt;/b&gt;. &lt;br&gt;Please try with another browser.&amp;nbsp;&lt;br&gt;&lt;p&gt;We apologize for any inconvenience caused.&lt;/p&gt;'),('message8', 'You did not answer the quiz correctly and are therefore excluded from further participation.&lt;p&gt;You will get no compensation.&amp;nbsp;&lt;/p&gt;&lt;p&gt;Thank you for your understanding.&amp;nbsp;&lt;/p&gt;');SELECT 1;ALTER TABLE e5390g37899_globals ADD PRIMARY KEY(`name`);SELECT 1;DROP TABLE IF EXISTS `e5390g37899_decisions`;SELECT 1;CREATE TABLE IF NOT EXISTS `e5390g37899_decisions` (
                  `playerNr` int(11),
                  `groupNr` int(11),
                  `subjectNr` int(11),
                  `period` int(11)
                  ,`initialCredit`   TEXT,`part`   TEXT,`newQueryString`   TEXT,`transfer1`   TEXT,`tripledAmount1`   TEXT,`keptForSelf1`   TEXT,`returned1`   TEXT,`totalRound1`   TEXT,`transfer2`   TEXT,`tripledAmount2`   TEXT,`keptForSelf2`   TEXT,`returned2`   TEXT,`totalRound2`   TEXT,`transfer3`   TEXT,`tripledAmount3`   TEXT,`keptForSelf3`   TEXT,`returned3`   TEXT,`totalRound3`   TEXT,`transfer4`   TEXT,`tripledAmount4`   TEXT,`keptForSelf4`   TEXT,`returned4`   TEXT,`totalRound4`   TEXT,`transfer5`   TEXT,`tripledAmount5`   TEXT,`keptForSelf5`   TEXT,`returned5`   TEXT,`totalRound5`   TEXT,`transfer6`   TEXT,`tripledAmount6`   TEXT,`keptForSelf6`   TEXT,`returned6`   TEXT,`fairscale`   TEXT,`fairscale_slidermoved`   TEXT,`s1`   TEXT,`s2`   TEXT,`s3`   TEXT,`s4`   TEXT,`s5`   TEXT,`s6`   TEXT,`s7`   TEXT,`s8`   TEXT,`s9`   TEXT,`s10`   TEXT,`s11`   TEXT,`s12`   TEXT,`s13`   TEXT,`comc1`   TEXT,`comc2`   TEXT,`comc3`   TEXT,`comc4`   TEXT,`comc5`   TEXT,`comc7`   TEXT,`comc6`   TEXT,`stat1`   TEXT,`stat2`   TEXT,`stat3`   TEXT,`warm1`   TEXT,`warm2`   TEXT,`warm3`   TEXT,`warm4`   TEXT,`warm5`   TEXT,`warm6`   TEXT,`compet1`   TEXT,`compet2`   TEXT,`g1`   TEXT,`g2`   TEXT,`g3`   TEXT,`g4`   TEXT,`g5`   TEXT,`g6`   TEXT,`openfeedback1`   TEXT,`openfeedback2`   TEXT,`openfeedback3`   TEXT,`totalRound6`   TEXT,`finalScore`   TEXT,`time_411223` float ,`time_411224` float ,`time_411225` float ,`time_411226` float ,`time_411227` float ,`time_411228` float ,`time_411229` float ,`time_411230` float ,`time_411231` float ,`time_411232` float ,`time_411233` float ,`time_411234` float ,`time_411235` float ,`time_411236` float ,`time_411237` float ,`time_411238` float ,`time_411239` float ,`time_411240` float ,`time_411241` float ,`time_411242` float ,`time_411243` float ,`time_411244` float ,`time_411245` float ,`time_411246` float ) CHARACTER SET utf8;SELECT 1;ALTER TABLE e5390g37899_decisions ADD PRIMARY KEY( `playerNr`, `period`);SELECT 1;DROP TABLE IF EXISTS `e5390g37899_logEvents`;SELECT 1;CREATE TABLE IF NOT EXISTS `e5390g37899_logEvents` (
                  `eventNr` int(11) NOT NULL AUTO_INCREMENT,
                  `groupNr` int(11) NOT NULL,
                  `playerNr` int(11) NOT NULL,
                  `timeEvent` varchar(256) NOT NULL,
                  `event` varchar(256) NOT NULL,
                  PRIMARY KEY(eventNr)
                ) CHARACTER SET utf8;SELECT 1;DROP TABLE IF EXISTS `e5390g37899_core`;SELECT 1;CREATE TABLE IF NOT EXISTS `e5390g37899_core` (
                      `playerNr` int(11) NOT NULL AUTO_INCREMENT,                   
                      `groupNr` int(11) NOT NULL,
                      `subjectNr` int(11) NOT NULL,
                      `groupNrStart` int(11) NOT NULL,
                      `currentGroupSize` int(11) NOT NULL,
                      `period` int(11) NOT NULL,
                      `onPage` varchar(30) NOT NULL,
                      `connected` boolean,
                      `tStart` int(11) NOT NULL,
                      `lastActionTime` int(11) NOT NULL,
                      `ipaddress` varchar(99) NOT NULL,
                      `ipaddress_part` varchar(15) NOT NULL,
                      `location` varchar(40) NULL,
                      `waitMore` int(11) NOT NULL,
                      `lobbyReady` boolean,
                      `enterLobby` INT(11),
                      `role` INT(11),`wait_411223ready` boolean,`wait_411224ready` boolean,`wait_411225ready` boolean,`wait_411226ready` boolean,`wait_411227ready` boolean,`wait_411228ready` boolean,`wait_411229ready` boolean,`wait_411230ready` boolean,`wait_411231ready` boolean,`wait_411232ready` boolean,`wait_411233ready` boolean,`wait_411234ready` boolean,`wait_411235ready` boolean,`wait_411236ready` boolean,`wait_411237ready` boolean,`wait_411238ready` boolean,`wait_411239ready` boolean,`wait_411240ready` boolean,`wait_411241ready` boolean,`wait_411242ready` boolean,`wait_411243ready` boolean,`wait_411244ready` boolean,`wait_411245ready` boolean,`wait_411246ready` boolean,`wait_lastInPeriod` boolean,
                      `periodReady` boolean,
                      `leftExperiment` boolean,
                      `experimentTerminated` boolean,
                      `groupAborted` boolean,
                      PRIMARY KEY (playerNr)
                    ) CHARACTER SET utf8;SELECT 1;DROP TABLE IF EXISTS `e5390g37899_session`;SELECT 1;CREATE TABLE IF NOT EXISTS `e5390g37899_session` (
                  `playerNr` int(11) NOT NULL,
                  `randomid` VARCHAR(256) NOT NULL,
                  `randomidNotPlayed` VARCHAR(256)   NOT NULL,
                  `relevantRandomid` varchar(256) NOT NULL,
                  `externalID` varchar(256) NULL,
                  `participationAmount` decimal(11,2) NOT NULL,
                  `bonusAmount` decimal(11,2) NOT NULL,
                  `totalEarnings` decimal(11,2) NOT NULL,`quizFail` int(11) DEFAULT 0,
                    PRIMARY KEY (playerNr)
                  ) CHARACTER SET utf8;SELECT 1;TRUNCATE `e5390g37899_session`;SELECT 1;