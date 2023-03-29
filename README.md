# LINKS
enos link: https://enos.itcollege.ee/~ksokun/web-project/
branch for milestone 2 (php): main

# SPECIFICATION FOR A WEBSITE

## Overview

General Summary:

* The primary goal of the website is to provide on-demand waste removal services that are easy to access, affordable, and eco-friendly. The website aims to reduce waste and promote recycling while providing a hassle-free solution for waste disposal. The website aims to make it easy to order waste collection online at a convenient time.
* The main audience includes homeowners, chairman of the apartment association, businesses and individuals who want to order either regular waste pickup, recycling waste pickup or bulk waste removal from any place in Tallinn, Estonia. 

## Team Members

- Vira Lavrova - 223682IVSB (vilavr@ttu.ee)
- Ksenija Okuneva - 223391IVSB (ksokun@ttu.ee)
## Goals

* Create website informational pages for the visitors to know about the service:
  - Description of process from signup until booking
  - Description of services to help the visitors choose the right service
  - Description of why to choose Throw It and some kind of team (us and fake team members)
  - Description of tems and conditions of service and website usage
* Create personal dashboard where customers can book the service:
  - Booking form with choosing of date and time, needed service and personal information of customer
  - Booking confirmation with consequent page 'order accepted' and ability to cancel the order (currently without the databases) with consequent page order 'order cancelled'
  - Settings page where users can place or change their data in the settings so that they won't need to enter this data again when booking repeatedly (currently not saving anywhere, will be implemented soon with databases)
  
## Objective

* Website is supposed to collect bookings of waste removal services and hold this information together with either service was done successfully or cancelled
* Also it is supposed to hold user bookings information to display it in the history of orders 
  
  
## Phases

- 1 March 2023 Milestone #1 (HTML/CSS) - COMPLETED
- 29 March 2023 Milestone #2 (PHP) - ABOUT TO BE COMPLETED
- 26 April 2023 Milestone #3 (SQL/JS) - ABOUT TO START
  
## Content Structure
- Home Page:
  - An introduction to the application
  - A brief description of the working process and prices for services
  - Testimonials to share others opinion about our services
  - A sidebar navigation menu to access other sections of the application

  
- Services:
  - Description of each service and button for ordering
  
- About Us:
  - Page describing our working principles and our team page access with information about team members
  
- Terms and Conditions:
  - A page with the application's terms and conditions, privacy policy, and any other legal information

- User Authentication:
  - A registration page for new users
  - A login page for existing users
  
- User Dashboard:
  - A booking form to order waste pickup with scheduler
  - A confirmation page with the details of the scheduled service
  - A confirmation page that order has been accepted, cancellation opportunity
  - A cancelled order page
  - A list of all orders (both finished and ongoing), cancellation opportunity
  - A personalized settings for each user with their account information
  - A sidebar navigation menu to access other sections of the application
  - Access to log out (session ends) and home page (session do not end)

### Site map

Hierarchical tree :

```text
HOME
  +--SERVICES
  |    +--REGULAR PICKUP
  |    +--RECYCLING
  |    +--BULK WASTE REMOVAL
  +--ABOUT US
  |    +--OUR TEAM
       |    +--WHY THROW IT
  +--TERMS AND CONDITIONS
  |    +--TERMS AND CONDITIONS
  |    +--PRIVACY POLICY
  +--USER AUTHENTICATION
  |    +--REGISTRATION
  |    +--LOGIN
  +--USER DASHBOARD
  |    +--BOOKING
  |    +--ORDER CONFIRMATION
  |    +--ORDER ACCEPTED
  |    +--ORDER CANCELLED
  |    +--ORDERS
  |    +--SETTINGS
  |    +--HOME
  |    +--LOG OUT
```

### Content Types

- Home: This page contain data types such as text, images, slider, and links to other pages in the application.

- About Us: This page contain data types such as text, images, and link to Our Team page with people.

- User Authentication: This page contain data types such as input fields for email, password, and username, links to User Agreement and Privacy Policy and buttons for submitting the form or going to other page.

- User Dashboard: This page contain data types such as form for booking, slider of orders, images, buttons, and form for user information changes.

- Terms and Conditions: This page contain data types such as legal information and disclaimers, as well as links to privacy policy and other related pages.

## Page Templates and Design

To see what our initial design have looked like visit this page:
https://www.figma.com/file/rf360KVfrYxrWxU8hguTQm/On-demand-garbage-collection-(Copy)?t=kE6rOFHwAWBTEu4b-0

## Functionality

* To sign up there are required a creation of username and password
* To log in there are required a creation of username and password
* To book waste pickup there are required name, surname, email, address in Tallinn, date and time selecting, service selecting, and if selected bulk waste removal - items' weights selecting
* Saved in settings data (with possible further user modifications) and in following orders is filled automatically while booking. 
* To change personal data in settings page there are required name, surname, email, address in Tallinn
* To change user data in settings page there are required username, old password, new password and repeated new password

* Users' history of orders is kept in orders page with different possible statuses (ongoing, completed or cancelled orders), price of each order and info about driver responsible for this order

* User role is to book waste pickup and cancel order when needed

* Home page includes log in and sign up buttons, booking button (leads to log in page), overview of ordering process, prices. Pricing part also includes short overview of services and call to get more info. 
* "About us" section includes two pages: "our team" included in "why us". The primer one is static, whilst the latter contains links to other pages (pricing, services, our team). Services section includes three pages: one for each service (regular pickup, bulk waste removal and recycling). Each page contains short overview of service, price and booking button (also leads to log in page). Terms and condition section includes User agreement and Privacy policy pages. 

* Users can be either logged in (thus they can access both info sections and personal dashboard), or logged out (thus they can access only info parts)

# Performance requirements:
- Load time: The website should load quickly, ideally in under three seconds, to prevent users from losing patience and navigating away from the site. This is especially important for mobile users, who may have slower internet connections.

- Responsiveness: The website should be designed to be responsive and mobile-friendly, ensuring that it is accessible and usable on a range of devices, including smartphones and tablets.

- Availability: The website should be available 24/7 to ensure that customers can access the services they need whenever they need them. The site should be hosted on a reliable server with minimal downtime.

- Security: The website should be secure, protecting customer data. The site should be hosted on a server with strong security protocols and should use SSL encryption to protect user data.

- Scalability: The website should be designed to handle high traffic volumes during peak usage periods, such as when a large number of customers are scheduling waste pickups simultaneously.

- Usability: The website should be easy to navigate and use, with clear and concise information about the services offered and how to schedule pickups or make payments.

- Performance monitoring: The website should be monitored regularly to identify any performance issues and to ensure that the site is performing optimally. Regular testing and maintenance should be performed to identify and fix any issues that may arise.

## Browser Support

- This web application supports:

  * Chrome/Chromium/Brave
  * Firefox
  * Edge
  * Mobile versions of browsers

## Hosting

ENOS server.
