# SPECIFICATION FOR A WEBSITE

## Overview

General Summary:

* This project solves the problem of garbage collection in private and multi-apartment buildings, in cases where it is required to carry out the removal outside the standard work schedule of the garbage collection team.
* The main audience of our application will be residents of apartment buildings, private residents or those who need garbage removal outside the main work schedule of the cleaning team.

## Team Members

- Ilja Grigorjev - 230646IVSB
- Vira Lavrova 
- Ksenija Okuneva

## Goals, Objectives and Phases

### Objective
- Design and develop a web application that allows users to schedule garbage removal outside the standard work schedule.
- Implement a notification system that reminds users of scheduled garbage removal.
- Provide a reliable and efficient garbage collection service that is convenient for the users.
- Mock partnerships agreements with private and multi-apartment buildings to expand the reach of the service.
### Goals

- Develop a mobile application to enable efficient and convenient garbage collection for private and multi-apartment buildings.
    - Create a mobile application that enables users to schedule and request garbage collection services for private and multi-apartment buildings.
    - Track the number of garbage collection requests made through the application and the satisfaction rate of users. 
    - The development team will create the web application and coordinate with existing garbage collection services.
    - The application will focus on creating a user-friendly and intuitive scheduling and request system, and leverage existing garbage collection services for efficient and timely garbage removal.
    - Develop, test and deploy the web application within 4 months.


- Enable garbage collection services outside the standard work schedule for cleaning teams through the web application, with available dates for booking.
    - Allow users to schedule and request garbage collection services outside the standard work schedule, with available dates for booking.
    - Track the number of garbage collection services scheduled outside the standard work schedule and the rate of successful bookings through the application.
    - The development team will create a scheduling and notification system that coordinates with the existing cleaning teams.
    - The scheduling and notification system will leverage the existing garbage collection services to provide a reliable and efficient garbage removal service.
    - Develop, test and integrate the scheduling and notification system within the web application within 4 months.


- Offer a user-friendly web application for residents of apartment buildings, private residents, and businesses that require garbage removal in available time.
    - Design and develop a web application that provides a user-friendly interface for scheduling and requesting garbage removal services for private and multi-apartment buildings.
    - Track the number of active users and user feedback to identify areas for improvement.
    - The development team will design and develop the web application, and conduct user testing and feedback gathering.
    - The web application will prioritize the user experience and create an intuitive and user-friendly interface for garbage collection scheduling and request.
    - Develop, test, and deploy the web application with a focus on user experience within 9 months.

### Phases

- ICS0008 Web technologies milestones for "On demand garbage collection" project.
  - HTML/CSS - project skeleton and set-up delivery.
  - PHP - project business logic delivery.
  - SQL/JS - project database and user mock delivery.
  
## Content Structure
- Home Page:
  - An introduction to the application
  - A brief description of the features and benefits
  - A call to action for users to sign up or log in
  
- User Authentication:
  - A registration page for new users
  - A login page for existing users
  - A forgot password page with the option to reset password via email
  
- User Dashboard:
  - A personalized dashboard for each user with their account information
  - A notification center for any updates or alerts
  - A sidebar navigation menu to access other sections of the application
  
- Garbage Collection Scheduling:
  - A form to schedule a garbage collection service for a user's private or multi-apartment building
  - A calendar view to select available dates and times for the service
  - A confirmation page with the details of the scheduled service
  
- Garbage Collection Request:
  - A form for users to request a garbage collection service outside the standard work schedule
  - A calendar view to select available dates and times for the service
  - A confirmation page with the details of the requested service
  
- User Profile:
  - A profile page for each user to view and edit their personal information
  - An option to change password or update account information
  
- Contact Us:
  - A page with contact information for the application's support team
  - A contact form for users to send support requests or feedback
  
- Terms and Conditions:
  - A page with the application's terms and conditions, privacy policy, and any other legal information

### Site map

Hierarchical tree :

```text
HOME
  +--ABOUT US
  |    +--INTRODUCTION
  |    +--FEATURES AND BENEFITS
  |    +--CALL TO ACTION
  +--USER AUTHENTICATION
  |    +--REGISTRATION PAGE
  |    +--LOGIN PAGE
  |    +--FORGOT PASSWORD PAGE
  +--USER DASHBOARD
  |    +--PERSONALIZED DASHBOARD
  |    +--NOTIFICATION CENTER
  |    +--NAVIGATION MENU
  +--GARBAGE COLLECTION SCHEDULING
  |    +--SCHEDULING FORM
  |    +--CALENDAR VIEW
  |    +--CONFIRMATION PAGE
  +--GARBAGE COLLECTION REQUEST
  |    +--REQUEST FORM
  |    +--CALENDAR VIEW
  |    +--CONFIRMATION PAGE
  +--USER PROFILE
  |    +--PROFILE PAGE
  |    +--PASSWORD UPDATE
  |    +--ACCOUNT INFORMATION UPDATE
  +--CONTACT US
  |    +--CONTACT INFORMATION
  |    +--SUPPORT REQUEST FORM
  +--TERMS AND CONDITIONS
  |    +--TERMS AND CONDITIONS PAGE
  |    +--PRIVACY POLICY PAGE
  |    +--LEGAL INFORMATION PAGE
```

### Content Types

- Home: This page contain data types such as text, images, and links to other pages in the application.

- About Us: This page contain data types such as text and images.

- User Authentication: This page contain data types such as input fields for email, password, and username, and buttons for submitting the form.

- User Dashboard: This page contain data types such as user account information, notification messages, and links to other sections of the application.

- Garbage Collection Scheduling: This page contain data types such as input fields for address, dates, and times, as well as confirmation messages and pricing information.

- Garbage Collection Request: This page contain data types such as input fields for address, dates, and times, as well as confirmation messages and pricing information.

- User Profile: This page contain data types such as user account information, input fields for updating password and other personal information.

- Contact Us: This page contain data types such as contact information for the support team, as well as a contact form for users to submit support requests or feedback.

- Terms and Conditions: This page contain data types such as legal information and disclaimers, as well as links to privacy policy and other related pages.

These data types are not necessarily hierarchical, but some of them may be related to each other in the application's data model.

#TODO

### Page Templates

Before the first milestone you should have "page templates", i.e., HTML pages that illustrate what info and data each page will contain. You can use mock content.

Make sure you include navigation menus, etc.

## Design

The page templates should come with CSS to give a good idea what the pages will look like when all components (`PHP`, `SQL` and `JavaScript`) are added.

## Functionality

How does your website work? What are the specific parts that each of your page require?

* What fields are required for sign-up?
* What happens if user leaves a comment?
* What are the user roles?
* What are performance requirements?

## Browser Support

- This web application supports:

  * Chrome/Chromium
  * Firefox
  * mobile browsers (Chrome, Firefox, Safari, etc)

## Hosting

