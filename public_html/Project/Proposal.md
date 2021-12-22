# Project: 

# Project Name: Simple Arcade
## Project Summary: This project will create a simple Arcade with scoreboards and competitions based on the implemented game. 
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


- Milestone 3
- Milestone 4
  - [ ] (mm/dd/yyyy of completion) User can set their profile to be public or private
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) User will be able to see their competition history
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) User with the role of “admin” can edit a competition where paid_out = false
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) Add pagination to the Active Competitions view
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) Anywhere a username is displayed should be a link to that user’s profile
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) Viewing an active or expired competition should show the top 10 scoreboard related to that competition
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) Game should be fully implemented/complete by this point
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) User’s score history will include pagination
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
  - [ ] (mm/dd/yyyy of completion) Home page will have a weekly, monthly, and lifetime scoreboard
    -  List of Evidence of Feature Completion
      - Status: Pending (Completed, Partially working, Incomplete, Pending)
      - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
      - Pull Requests
        - PR link #1 (repeat as necessary)
      - Screenshots
        - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
          - Screenshot #1 description explaining what you're trying to show
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
