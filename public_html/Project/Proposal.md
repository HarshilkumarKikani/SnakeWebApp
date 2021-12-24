# Project: 

# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game. Base game code: [https://gist.github.com/ZiKT1229/5935a10ce818ea7b851ea85ecf55b4da ]
## Github Link: https://github.com/hk453/IT202-007/tree/prod/public_html/Project
## Project Board Link: https://github.com/hk453/IT202-007/projects/1
## Website Link: https://hk453-prod.herokuapp.com/Project/login.php
## Your Name: Harshilkumar Kikani

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] (mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence


- Milestone 1
  - [X] (11/2021) User will be able to register a new account
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/register.php 
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR Link #1 https://github.com/hk453/IT202-007/pull/31
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141665303-93991c1f-a7ff-4909-98ae-c3b2a0ba903a.png)
          - Screenshot 1 Valid Email Test
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/90267388/141665396-ba5e4957-c8b8-4e07-ad5a-b4487027a9e2.png)
          - Screenshot #2 Username Required Test
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/90267388/141665442-e54eba92-fa1a-493f-ac48-f5b0cf686f53.png)
          - Screenshot #3 Passwords matching test
        - Screenshot #4 ![image](https://user-images.githubusercontent.com/90267388/141665567-acd0286e-e72a-4eb0-b58c-4b1d66a0106c.png)
          - Screenshot #4 Showing password column is 60 characters and hashed
        - Screenshot #5 ![image](https://user-images.githubusercontent.com/90267388/141665902-1b145828-25b1-483c-a769-db4892ea31fd.png)
          - Screenshot #5 Username should be unique (shows username doesn't get cleared when form is submitted)
        - Screenshot #6 ![image](https://user-images.githubusercontent.com/90267388/141665677-2429176d-2b7f-4e82-a7b7-2c94fdca766c.png)
          - Screenshot #6 Email should be unique (shows email doesn't get cleared when form is submitted)

  - [X] (11/2021) User will be able to login to their account (given they enter the correct credentials)
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/login.php 
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/31
        - PR link #2 https://github.com/hk453/IT202-007/pull/32
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141666257-daafceae-a455-4fb0-be86-77d10dd28445.png)
          - Screenshot #1 Showing you can login with both email and username (email version)
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/90267388/141666271-6f3182e3-2028-4556-8100-84b736929acc.png)
          - Screenshot #2 Showing you can login with both email and username (username version)
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/90267388/141666356-e867eb5f-3686-4caa-abdc-0d247536b7ba.png)
          - Screenshot #3 Showing error when logging in incorrectly (password problem)
        - Screenshot #4 ![image](https://user-images.githubusercontent.com/90267388/141666425-353d346b-2a43-48f3-a300-1bad0e006c4d.png)
          - Screenshot #4 Showing error when logging in incorrectly (email problem)
        - Screenshot #5 ![image](https://user-images.githubusercontent.com/90267388/141666500-a2ed2566-13e2-4af2-b939-ca83b43ca420.png)
          - Screenshot #5 Proper form validation
        - Screenshot #6 ![image](https://user-images.githubusercontent.com/90267388/141666271-6f3182e3-2028-4556-8100-84b736929acc.png)
          - Screenshot #6 Directed to protected page upon login (home) + fetches user’s details and saves them onto session

  - [x] (11/2021) User will be able to logout
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/logout.php
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/31
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141667057-aa8d3a28-5cfc-4dc5-8edd-afdf5666f9af.png)
          - Screenshot #1 Logging out redirects to login page + user sees successful logout message
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/90267388/141667141-e28ab16f-f148-44e3-8394-2f3f95c13918.png)
          - Screenshot #2 Session destroyed once logged out and back button does not work

  - [X] (11/2021) Basic security rules implemented
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link:
        - D link #1: https://hk453-prod.herokuapp.com/Project/login.php
        - D link #2: https://hk453-prod.herokuapp.com/Project/home.php
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/31
        - PR link #2 https://github.com/hk453/IT202-007/pull/28
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141667753-26dc5d65-80fc-4976-929f-23366b2b96f1.png)
          - Screenshot #1 Roles table
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/90267388/141667546-d9a796cf-b02a-4f94-9e70-beac7905592d.png)
          - Screenshot #2 Authentication (checks if user is logged in + only allows logged in users to go into the website and access contents)

  - [X] (11/2021) Basic Roles implemented
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/login.php 
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/28
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141667411-70521c15-6747-47bd-9a26-d3c0d3d48916.png)
          - Screenshot #1 User Roles Table
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/90267388/141667753-26dc5d65-80fc-4976-929f-23366b2b96f1.png)
          - Screenshot #2 Roles Table
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/90267388/141667546-d9a796cf-b02a-4f94-9e70-beac7905592d.png)
          - Screenshot #3 Include a function to check if a user has a specific role

  - [X] (11/13/2021) Site should have basic styles/theme applied; everything should be styled
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/login.php
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/39
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141668943-28d04004-1315-47d4-9ec0-a722270375fc.png)
          - Screenshot #1 Basic styles/theme applied

  - [X] (11/13/2021) Any output messages/errors should be “user friendly”
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/home.php
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/30
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141703485-9d80b0fa-62c7-4deb-83f2-ea0fba73dc86.png)
          - Screenshot #1 Successfully registered message
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/90267388/141703611-c39dd0b6-6865-488e-9bdc-6c83efd70c0f.png)
          - Screenshot #2 Welcome message
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/90267388/141703739-bdd10a16-ef01-43b3-990d-9744a34f4854.png)
          - Screenshot #3 Logout message

  - [X] (11/13/2021) User will be able to see their profile
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/33
      - Screenshots
        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141703936-e0a3d05b-fa80-4790-bf19-f1a99ae2978b.png)
          - Screenshot #1 User can see the profile with email and username

  - [X] (11/13/2021) User will be able to edit their profile
    -  List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://hk453-prod.herokuapp.com/Project/profile.php
      - Pull Requests
        - PR link #1 https://github.com/hk453/IT202-007/pull/33
      - Screenshots

        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show


        - Screenshot #1 ![image](https://user-images.githubusercontent.com/90267388/141704175-62a72b49-af59-41c4-8716-09fb23e6b999.png)
          - Screenshot #1 Checks to see if updated email name is available
        - Screenshot #2 ![image](https://user-images.githubusercontent.com/90267388/141704243-c94cc4c5-32a5-4b5f-ba24-a5c3770c0303.png)
          - Screenshot #2 Checks to see if updated username is available
        - Screenshot #3 ![image](https://user-images.githubusercontent.com/90267388/141704286-31e3c5f6-5086-405c-a4b0-c5dbaaebf8d3.png)
          - Screenshot #3 Checks to see if current password is typed correctly
        - Screenshot #4 ![image](https://user-images.githubusercontent.com/90267388/141704379-0f53ef83-82fa-4a1d-9c1d-b2f9707005e2.png)
          - Screenshot #4 Confirms password was changed once current password is typed correctly
        - Screenshot #5 ![image](https://user-images.githubusercontent.com/90267388/141704451-91f33bf5-6426-4b92-aed2-38493f60c997.png)
          - Screenshot #5 Checks to see if new password and confirm password fields match


<table>
<tr><td>Milestone 2</td></tr><tr><td>
<table>
<tr><td>F1 - Pick a simple game to implement, anything that generates a score that’s more advanced than a simple random number generator (may build off of a sample from the site shared in class) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/Snake.php](https://hk453-prod.herokuapp.com/Project/Snake.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/76](https://github.com/hk453/IT202-007/pull/76)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - What game will you be doing? + Briefly describe it.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/145695333-904cde8f-8427-4dff-818b-c9573c64d1d3.png">
<p>My game will be a snake going around collecting points.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - The system will save the user’s score at the end of the game if the user is logged in ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/profile.php](https://hk453-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/79](https://github.com/hk453/IT202-007/pull/79)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - There should be a scores table (id, user_id, score, created) + Each received score is a new entry (scores will not be updated)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/145695488-1d9103e1-496a-422d-b57d-2731b4963273.png">
<p>Every time the snake hits itself, the game is saving that final score to a database called "snake_scores".</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - The user will be able to see their last 10 scores ()</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/profile.php](https://hk453-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/80](https://github.com/hk453/IT202-007/pull/80)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - Show on their profile page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/145696124-1a8aa904-2405-47a0-a646-3119af379ce0.png">
<p>Scores shown on the user's profile page when logged in.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Ordered by most recent</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/145696252-b32989be-f284-4a9d-a82d-1f4266e80f20.png">
<p>Progress made (functions page)</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/145696309-3aef8693-8aeb-4b4b-aacf-ac4afc9e4223.png">
<p>Progress made so far (cont.) (profile page)
- I am using get_latest_scores function but am not sure why it isn't displaying by most recent score. It may be because it is conflicting with another function get_best_score and showing the order by best scores instead.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Create functions that output the following scoreboards (this will be used later) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/Snake.php](https://hk453-prod.herokuapp.com/Project/Snake.php)</p><p>

 [https://hk453-prod.herokuapp.com/Project/profile.php](https://hk453-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/81](https://github.com/hk453/IT202-007/pull/81)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Top 10 Weekly, Monthly, Lifetime</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/145696510-5cb43a16-e4a4-4036-8dd1-d36ae8e9b614.png">
<p>A new function in my functions.php file that will be used later to get the top 10 scores by different time intervals.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>




<table>
<tr><td>Milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - Users will have points associated with their account. ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/profile.php](https://hk453-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/84](https://github.com/hk453/IT202-007/pull/84)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Alter the User table to include points with a default of 0.</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147039000-ffd7ed87-e161-4dee-a3e8-3d28a7a1684a.png">
<p>Points shown on table with a default of 0.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Points should show on their profile page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147038821-9d9e128f-16d4-47b4-a034-7b96be1d1680.png">
<p>Points shown on profile page.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Create a PointsHistory table (id, user_id, point_change, reason, created) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/profile.php](https://hk453-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/85](https://github.com/hk453/IT202-007/pull/85)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Any new entry should update the user’s points value (do not update the User points column directly)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147039117-aa930eb2-47c7-4c13-af23-bfb2613308bd.png">
<p>PointsHistory table</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147039374-50045753-1c0a-414a-b011-4a85ffeece79.png">
<p>Points have gone up compared to screenshot in feature 1 because of new score recorded.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - Competitions table should have the following columns ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/home.php](https://hk453-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/98](https://github.com/hk453/IT202-007/pull/98)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - (id, name, created, duration, expires (now + duration), current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out (boolean), min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created, modified)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147039998-f357e433-3c59-4766-83ff-35ccad0986ea.png">
<p>Competitions table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - User will be able to create a competition ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/create_competition.php](https://hk453-prod.herokuapp.com/Project/create_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/86](https://github.com/hk453/IT202-007/pull/86)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Sub feature bullets 1-7 (competitions start at 1 point, user sets name, min cost to qualify, etc)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147041468-a278d031-81e7-4a3c-af44-44e7e07d4cb4.png">
<p>Users being able to create a competition</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Show any user friendly error messages + Show user friendly confirmation message that competition was created</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147041828-3a61b7a9-b5b8-4be1-b787-d7532b4808a7.png">
<p>User friendly message + successfully created competition message</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - The cost to the creator of the competition will be (1 + starting reward value)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147041993-2bb0c7c5-9617-4376-8a08-028b2f5ed731.png">
<p>If they can’t afford it, the competition should not be created</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147041828-3a61b7a9-b5b8-4be1-b787-d7532b4808a7.png">
<p>If they can afford it, automatically add them to the competition</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Each new participant causes the Reward value to increase by at least 1 or 50% of the joining fee rounded up ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/list_competition.php](https://hk453-prod.herokuapp.com/Project/list_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/87](https://github.com/hk453/IT202-007/pull/87)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - Evidence</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147042237-7bc5eaa5-d218-4dfb-85c3-5032352ac80a.png">
<p>Payout value increases with new participants added.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Have a page where the User can see active competitions (not expired) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/list_competition.php](https://hk453-prod.herokuapp.com/Project/list_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/88](https://github.com/hk453/IT202-007/pull/88)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - Evidence</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147042573-6a13cdbf-da59-4396-a828-4bc177055227.png">
<p>Users can see active competitions on the list competitions screen.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - Will need an association table CompetitionParticipants (id, comp_id, user_id, created) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/view_competition.php?id=3](https://hk453-prod.herokuapp.com/Project/view_competition.php?id=3)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/89](https://github.com/hk453/IT202-007/pull/89)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Comp_id and user_id should be a composite unique key (user can only join a competition once)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147042881-def8cefc-1ab6-4c4b-933d-a4e8ff30da44.png">
<p>CompetitionParticipants table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - User can join active competitions ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/list_competition.php](https://hk453-prod.herokuapp.com/Project/list_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/90](https://github.com/hk453/IT202-007/pull/90)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - Joining active competitions</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147043186-9e4a5982-4c75-46c1-9f0b-553267d0c38c.png">
<p>Different account's screen when looking at active competitions made by other users (shows join cost and button)</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Update the Competitions.reward based on the # of participants and the appropriate math from the competition requirements above</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147042237-7bc5eaa5-d218-4dfb-85c3-5032352ac80a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show proper confirmation if user registered successfully + shows message user already registered</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147043713-b2be9f15-862f-43d0-8bcc-58915c19ab7d.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - Create function that calculates competition winners ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/list_competition.php](https://hk453-prod.herokuapp.com/Project/list_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/92](https://github.com/hk453/IT202-007/pull/92)</p></td></tr>
<tr><td>
<table>
<tr><td>F9 - Get the top 3 winners</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147046864-4208750d-6aba-48e9-ae13-2872b42fc808.png">
<p>Calculating top 3 winners code</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Calculate the payout (reward * place_percent)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147047014-c43dbbae-03b6-4e7f-909b-ab158bbb77f8.png">
<p>Calculating payout code</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Create entries for the Users in the PointsHistory table</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ffcc00/ffffff?text=in-progress"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147047363-1c140e00-ef65-47a2-91fb-36fdb8307d2a.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F9 - Mark the competition as paid_out = true</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147047468-02063142-4b74-4658-9b2c-ca530fbf52e0.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>







<table>
<tr><td>Milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/profile.php](https://hk453-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/99](https://github.com/hk453/IT202-007/pull/99)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Evidence</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147302280-2ade4f4e-1e1a-493c-9a23-1b15febef5d9.png">
<p>Under profile settings there is an option to make profile public or private.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - User will be able to see their competition history ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/view_competition.php?id=8](https://hk453-prod.herokuapp.com/Project/view_competition.php?id=8)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/100](https://github.com/hk453/IT202-007/pull/100)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Limit to 10 results + paginate anything after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147302630-f0bc5188-065b-46f8-b7d0-257d57f76e60.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - Add pagination to the Active Competitions view ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/list_competition.php](https://hk453-prod.herokuapp.com/Project/list_competition.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/102](https://github.com/hk453/IT202-007/pull/102)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - Limit to 10 results + pagination</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147302630-f0bc5188-065b-46f8-b7d0-257d57f76e60.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Anywhere a username is displayed should be a link to that user’s profile ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/home.php](https://hk453-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/103](https://github.com/hk453/IT202-007/pull/103)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - This includes all scoreboards</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147306321-58728200-e567-4c93-b290-c54e96a0b414.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - If the profile is private you can have the page just display “this profile is private” upon access</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147306394-9ac4922c-dd62-4a72-9913-1460f1ad1cf6.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Viewing an active or expired competition should show the top 10 scoreboard related to that competition ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/view_competition.php?id=8](https://hk453-prod.herokuapp.com/Project/view_competition.php?id=8)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/104](https://github.com/hk453/IT202-007/pull/104)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - Evidence</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147306810-e2e8d554-20c6-4fda-95a8-a3d81fc947c0.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Game should be fully implemented/complete by this point ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/Snake.php](https://hk453-prod.herokuapp.com/Project/Snake.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/105](https://github.com/hk453/IT202-007/pull/105)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - The game</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147306950-84ab7efd-2a7a-4574-8595-0abfdc459af6.png">
<p>Base game code used from:
https://gist.github.com/ZiKT1229/5935a10ce818ea7b851ea85ecf55b4da</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - User’s score history will include pagination ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/profile.php](https://hk453-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/106](https://github.com/hk453/IT202-007/pull/106)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Show 10 + pagination after 10</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ffcc00/ffffff?text=in-progress"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147307332-e58121f3-5a77-41e0-b943-64ecb7b4b432.png">
<p>10 scores are showing per page but pagination is still not working correctly. I tried using $offset and $per_page, but was still getting minor issues.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - Home page will have a weekly, monthly, and lifetime scoreboard ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://hk453-prod.herokuapp.com/Project/home.php](https://hk453-prod.herokuapp.com/Project/home.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/hk453/IT202-007/pull/110](https://github.com/hk453/IT202-007/pull/110)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - Home page view of top scores by week, month, and lifetime + scoreboards will show username and points for the session</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147307448-fd365372-76a3-4ab7-85ec-31de849efd9c.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Will also have a link to the game</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267388/147307624-cea6cf31-4a91-47ae-86ea-70769c88ec9e.png">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>




### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
