# **EPMA - Enterprise Project Management Assistant**

**EPMA** is an information system which facilitates the management of projects and teams within a company, in particular, when teams can work on multiple projects in parallel.

# A10: Product presentation

The **E**nterprise **P**roject **M**anagement **A**ssistant is a closed information system for a company, accessible through a web interface, responsible for managing teams, projects and their relationships. The system will allow administrators to assign members responsible for the created teams and projects. Each project is constituted of tasks, arranged into categories and milestones with a defined deadline. Teams can be assigned to these tasks with a great degree of freedom, allowing multiple teams to be working on a single task and a team to be working on multiple projects at once.<br>
EPMA features a simple homepage for all users, containing all of their responsibilities (Assigned tasks and Projects being managed) in a clear and organized layout. The task cards feature progress bars to allow for intuitively comparing the progress of a task to its upcoming deadline. The system provides its users with artifacts for helping coordination and communication between peers. Aside from a global forum for the whole company, each project has its own forum and all tasks have an thread associated to it for discussion.

## 1. Installation

The final version of the source code is currently available at the group’s git repository which can be accessed through the following link:

* **Source code link** - [https://git.fe.up.pt/lbaw/lbaw18/lbaw1854/tree/A10](https://git.fe.up.pt/lbaw/lbaw18/lbaw1854/tree/master)

In order to test the group’s Docker Hub image, using the DBM database, the following command must be executed: 

``` docker run -it -p 8000:80 -e DB_DATABASE="lbaw1854" -e DB_USERNAME="lbaw1854" -e DB_PASSWORD="uu72by92" ruiguedes/lbaw1854 ```

This command exposes our application on http://localhost:8000. The -e argument creates environment variables inside the container, used to provide Laravel with the required database configurations.


## 2. Usage

A demonstration of the EPMA website is available, showcasing the system’s functionalities using a small dataset as an example. We recommend the usage of the following credentials for an enhanced experience and feel of the website.
	
* **URL** - [http://lbaw1854.lbaw-prod.fe.up.pt](http://lbaw1854.lbaw-prod.fe.up.pt)

### 2.1. Administration Credentials

We provide an administration section that can be accessed after the admin successful login. The administration section can be accessed through the admin icon present on the main navigation bar or through the following link: 

* **Administration URL**: [http://lbaw1854.lbaw-prod.fe.up.pt/admin/users](http://lbaw1854.lbaw-prod.fe.up.pt/admin/users)


| Username | Password |
|----------|----------|
| sopolinepetty | somebodyoncetoldme |

### 2.2. User Credentials

| Type | Username | Password |
|------|----------|----------|
| Team Member | cullenleblanc | Yourebundledupnow |
| Team Leader | deidremcbride | Yourbraingetssmart |
| Project Manager and Team Member | armandomartinez | Myworldsonfire |

## 3. Application Help

One of the most important tasks in the system is the creation and editing of teams. This task, performed by an Administrator, is the one with most complexity and least intuitivity for the first time. For this reason, we’ve implemented an Help page, specifically for this task, accessible from the page associated with the task, by clicking the question mark icon on the upper right corner of the main content. This Help page contains a list of useful information regarding what a team is and how to perform the task associated with its creation / editing.

## 4. Input Validation

The input data was validated at three distinct stages by using HTML5, JavaScript and functionalities provided by the Laravel framework.
	
We have used the HTML5 form functionalities to constraint the input data to follow a specific set of rules, such as the expected type of input and the length of passwords.

The input data was also validated using JavaScript, avoiding unnecessary requests to the server and serving as a user guide, since it informs him beforehand missing fields or invalid input data.

Laravel provided further functionalities to validate input data, particularly regarding security issues. We’ve used Laravel’s built in functions to prevent cross-site scripting and cross-site request forgery. Since we made use of the Laravel Eloquent Model, SQL injection is also prevented, however, in the case of the full-text search, we had to use Laravel’s prepared statements for preventing SQL injection.


## 5. Check Accessibility and Usability

Both accessibility and usability were tested by using the following checklists respectively:

* [Accessibility](https://ux.sapo.pt/checklists/acessibilidade/)
* [Usability](https://ux.sapo.pt/checklists/usabilidade/)

By checking each requirement for both accessibility and usability presented in the checklists, the results were solid, as provided in the PDF files included in the submission. The simplified results were as follows:

* Accessibility - 18/18 [(PDF)](uploads/cbeec57e12258d8c8cd15bc84f631844/acessibilidade.pdf)
* Usability - 27/28 [(PDF)](uploads/595e1ddb49563c6e3835c6e4cb1f93aa/usabilidade.pdf)

Due to the complexity of the system, it was hard to ensure every requirement was rigorously met in all occurrences, therefore the requirements were assured on the most critical functions of the system. One of the usability requirements, regarding the usage of Open Graph tags, were ignored since they do not fit on the context and purpose of our system.

## 6. HTML & CSS Validation

We validated the HTML and CSS files of the main pages of our system (Index, Login, Register and Home), using the following validators:

* [HTML Validator](https://validator.w3.org/nu/)
* [CSS Validator](https://jigsaw.w3.org/css-validator/)

The results, provided in the PDF files included in the submission, were acceptable, containing only minor mistakes on the HTML validation, that do not affect the usability of the system. 

In the CSS validation, only errors and warning regarding the usage of variables and of an unknown vendor extension, which was added for supporting a specific browser (-webkit-transition-duration).

* [HTML Validator Results](uploads/5f3724f67594a943e0c553181f7a941d/html.pdf)
* [CSS Validator Results](uploads/088ae6f0cc6cd5549dffbb7ceca7d4aa/css.pdf)


## 7. Revisions to the Project

Throughout the implementation stage, some revisions to the specification of the system were made. All of these revisions were fully documented in the artefact correspondent to the context of that artifact’s specification, at their revision history section. The main revisions that were made are present in the following artefacts: 
	
* **A2** - [Actors and User Stories](https://git.fe.up.pt/lbaw/lbaw18/lbaw1854/wikis/a2)
* **A6** - [Indexes, triggers, user functions and population](https://git.fe.up.pt/lbaw/lbaw18/lbaw1854/wikis/a6)
* **A7** - [High-level architecture. Privileges. Web resources specification](https://git.fe.up.pt/lbaw/lbaw18/lbaw1854/wikis/a7)


## 8. Implementation Details

### 8.1. Libraries Used

For the development of the system, we used the Laravel framework and Bootstrap.The [Laravel](https://laravel.com/) framework was used to develop the website system by establishing a MVC pattern and providing utilities for templating, database access and routing. The [Bootstrap](https://getbootstrap.com/) library was used to develop the website frontend, since it is a powerful tool for developing responsive designs.

### 8.2 User Stories

Implementation of each user story, along with its name, priority, developers and state. The new user user stories are also include and marked as bold.

| US Identifier | Name | Priority | Team members | State |
|---------------|------|----------|--------------|-------|
| US001 | Home page | Mandatory | Rui Guedes, César Pinho, Alexandra Mendes | 100% |
| US002 | Sign-up | Mandatory | Rui Guedes, João Barbosa | 100% |
| US003 | Sign-in | Mandatory | Rui Guedes, João Barbosa | 100% |
| US004 | Sign-in using an external API | Optional |  | 0% |
| US005 | Sign-up using an external API | Optional |  | 0% |
| US101 | Logout | Mandatory | Rui Guedes, Alexandra Mendes | 100% |
| US102 | Edit profile | Mandatory | César Pinho, Rui Guedes | 100% | 
| US103 | Search Users | Mandatory | Rui Guedes, César Pinho | 100% |
| US104 | View User Profiles | Mandatory | César Pinho, João Barbosa | 100% |
| US105 | Search Projects | Mandatory | Rui Guedes, João Barbosa | 100% |
| US106 | Follow Users | Important | Rui Guedes, Alexandra Mendes | 100% |
| US107 | Favorite projects | Important | César Pinho | 100% |
| US108 | Create threads and posts on company’s forum | Important | Rui Guedes | 100% |
| US109 | Edit my threads and posts on company’s forum | Important | Rui Guedes | 100% |
| US110 | Delete my threads and posts on company’s forum | Important | João Barbosa | 100% |
| US111 | Company Statistics | Optional |  | 0% |
| US112 | User History | Optional |  | 0% |
| US113 | Forums new posts | Optional |  | 0% |
| **US114**| **Upload image** | **Important**| **Rui Guedes** | **100%** |
| **US115**| **Password recovery** | **Mandatory**| **Rui Guedes** | **100%** |
| US201 | View team’s projects | Mandatory | César Pinho, João Barbosa | 100% |
| US202 | View my team’s tasks | Mandatory | Rui Guedes, João Barbosa | 100% |
| US203 | Write comments on my team’s tasks | Mandatory | César Pinho | 100% |
| US204 | Remove my comments on my team’s tasks | Mandatory | César Pinho, Alexandra Mendes | 100% |
| US205 | Edit my comments on my team’s tasks | Important | César Pinho, Alexandra Mendes | 100% |
| **US206** | **Get notified about my team’s current active tasks** | **Important**| **Rui Guedes, João Barbosa** | **99%** |
| US301 | Create threads and posts on my team’s project forums | Mandatory | Rui Guedes, Alexandra Mendes | 100% |
| US302 | Delete my threads and posts on my team’s project forums | Mandatory | César Pinho, Alexandra Mendes | 100% |
| US303 | Update team’s tasks’ progress bar | Mandatory | César Pinho, João Barbosa | 100% |
| US304 | Remove any comments on my team’s tasks | Important | César Pinho, Alexandra Mendes | 100% |
| US305 | Edit my threads and posts on my team’s project forums | Important | César Pinho | 100% |
| US306 | Highlight comments on my team’s tasks. | Optional |  | 0% |
| US401 | Create tasks | Mandatory | Rui Guedes, João Barbosa | 100% |
| US402 | Organize tasks into groups | Mandatory | João Barbosa, Alexandra Mendes | 100% |
| US403 | Assign teams to tasks | Mandatory | César Pinho | 100% |
| US404 | Close Projects | Mandatory | César Pinho, Alexandra Mendes | 100% |
| US405 | Create threads and posts on project forum | Mandatory | João Barbosa, Alexandra Mendes | 100% |
| US406 | Remove any threads and posts on project forum | Mandatory | César Pinho | 100% |
| US407 | Assign tasks to milestones with deadlines | Important | César Pinho, João Barbosa | 100% |
| US408 | Edit my threads and posts on project forum | Important | João Barbosa | 100% |
| US409 | Highlight threads | Optional |  | 0% |
| US410 | Import task boards | Optional |  | 0% |
| US501 | Create Projects | Mandatory | Rui Guedes | 100% |
| US502 | Cancel Projects | Mandatory | Rui Guedes, João Barbosa | 100% |
| US503 | Assign Project Manager to Projects | Mandatory | Rui Guedes, Alexandra Mendes | 100% |
| US504 | Create teams | Mandatory | César Pinho | 100% |
| US505 | Edit team name | Mandatory | César Pinho, Alexandra Mendes | 100% |
| US506 | Remove teams | Mandatory | César Pinho | 100% |
| US507 | Assign team leaders | Mandatory | César Pinho, Rui Guedes | 100% |
| US508 | Assign users to teams’ | Mandatory | César Pinho, João Barbosa | 100% |
| US509 | Remove users from a team  | Mandatory | César Pinho, João Barbosa | 100% |
| US510 | Remove users | Mandatory | César Pinho | 100% |
| US511 | View projects | Important | Rui Guedes, João Barbosa | 100% |
| US512 | Restore users | Important | César Pinho | 100% |
| US513 | Remove any threads and posts on  company’s forum | Important | Rui Guedes, Alexandra Mendes | 100% |
| US514 | Colorize projects | Important | Rui Guedes, João Barbosa | 100% |


***
Developers: 
 
* Alexandra Mendes, up201604741@fe.up.pt
* César Pinho, up201604039@fe.up.pt 
* João Barbosa, up201604156@fe.up.pt
* Rui Guedes, up201603854@fe.up.pt
