# SPECIFICATION FOR A WEBSITE

## Overview
[img](img)
General Summary:

* The primary goal of the website is to provide on-demand waste management services that are easy to access, affordable, and sustainable. The website aims to reduce waste and promote recycling while providing a hassle-free solution for waste disposal.
* The main audience includes homeowners, apartment dwellers, and businesses who require waste management services. 

## Team Members

- Ilja Grigorjev - 230646IVSB
- Vira Lavrova - 223682IVSB
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


- Offer a user-friendly web application for residents of apartment buildings, private residents, and businesses that require garbage removal in available time.
    - Design and develop a web application that provides a user-friendly interface for scheduling and requesting garbage removal services for private and multi-apartment buildings.
    - Gather user feedback for further iprovements
    - The development team will design and develop the web application, and conduct user testing
    - The web application will prioritize the user experience and create an intuitive and user-friendly interface for garbage collection scheduling and request.
    - Develop, test, and deploy the web application with a focus on user experience

### Phases

- ICS0008 Web technologies milestones for "On demand garbage collection" project.
  - HTML/CSS - project skeleton and set-up delivery.
  - PHP - project business logic delivery.
  - SQL/JS - project database and user mock delivery.
  
## Content Structure
- Home Page:
  - An introduction to the application
  - A brief description of the features and benefits (pricing, principles of work)
  - A call to action for users to sign up or log in
  
- User Authentication:
  - A registration page for new users
  - A login page for existing users
  
- User Dashboard:
  - A personalized dashboard for each user with their account information
  - A list of all orders (both finished and ongoing), cancellation opportunity
  - A sidebar navigation menu to access other sections of the application
  - User settings
  
- Garbage Collection Scheduling:
  - A form to schedule a garbage collection service for a user's private or multi-apartment building
  - A calendar view to select available dates and times for the service
  - A confirmation page with the details of the scheduled service
  
- User Profile:
  - A profile page for each user to view and edit their personal information
  - An option to change password or update account information
  
- Contact Us:
  - A contact form for users to send support requests or feedback
  
- Terms and Conditions:
  - A page with the application's terms and conditions, privacy policy, and any other legal information

### Site map

Hierarchical tree :

```text
HOME
  +--ABOUT US
  |    +--WHY US
  |    +--OUR TEAM
  +--USER AUTHENTICATION
  |    +--REGISTRATION PAGE
  |    +--LOGIN PAGE
  |    +--FORGOT PASSWORD PAGE
  +--USER DASHBOARD
  |    +--PERSONALIZED SETTINGS
  |    +--LIST OF ORDERS
  |    +--NAVIGATION MENU
  |    +--BOOKING FORM
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
  |    +--SUPPORT REQUEST FORM
  +--TERMS AND CONDITIONS
  |    +--TERMS AND CONDITIONS PAGE
  |    +--PRIVACY POLICY PAGE
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

* Home page includes log in and sign up buttons, booking button (leads to log in page), overview of ordering process, prices. Pricing part also includes short overview of services and call to get more info. "About us" section includes two pages: "our team" and "why us". The primer one is static, whilst the latter contains links to other pages (pricing, services, our team). Services section includes three pages: one for each service (regular pickup, bulk waste removal and recycling). Each page contains short overview of service, price and booking button (also leads to log in page). Terms and condition section includes User agreement and Privacy policy pages. 

* Username and password are required for sign up (log in); personal information like name or address is entered with the first order. Then it is saved in settings (with possible further user modifications) and in following orders is filled automatically. 

* Personal dashboard includes history of orders with different possible statuses (ongoing, completed or cancelled orders), price of each order and info about driver responsible for this order

* Users can be either logged in (thus they can access both info sections and personal dashboard), or logged out (thus they can access only info parts)

* Performance requirements:
- Load time: The website should load quickly, ideally in under three seconds, to prevent users from losing patience and navigating away from the site. This is especially important for mobile users, who may have slower internet connections.

- Responsiveness: The website should be designed to be responsive and mobile-friendly, ensuring that it is accessible and usable on a range of devices, including smartphones and tablets.

- Availability: The website should be available 24/7 to ensure that customers can access the services they need whenever they need them. The site should be hosted on a reliable server with minimal downtime.

- Security: The website should be secure, protecting customer data. The site should be hosted on a server with strong security protocols and should use SSL encryption to protect user data.

- Scalability: The website should be designed to handle high traffic volumes during peak usage periods, such as when a large number of customers are scheduling waste pickups simultaneously.

- Usability: The website should be easy to navigate and use, with clear and concise information about the services offered and how to schedule pickups or make payments.

- Performance monitoring: The website should be monitored regularly to identify any performance issues and to ensure that the site is performing optimally. Regular testing and maintenance should be performed to identify and fix any issues that may arise.

## Browser Support

- This web application supports:

  * Chrome/Chromium
  * Firefox

## Hosting
