<!DOCTYPE html>
<html>
    
    <head>
        <title>Project Details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Description of our project">
        <meta name="robot" content="noindex nofollow">
        <meta http-equiv="author" content="William Davidson">
        <meta http-equiv="pragma" content="no-cache">

        <!-- Custom styles for this template -->
        <link href="css/jumbotron.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet">
        <link href="css/style42.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <link href="css/project_details_style.css" type="text/css" rel="stylesheet" />
    
    </head>

    <body>
        <div class="bg">
        <div id="nav-placeholder"></div>
        <div class="contents">
        <h1>Project Details</h1>
        <h2>Project Description</h2>
        <p>
            The overall project plan (to be completed in <span class="underline"> 3 phases</span>) is to build and control an elevator, 
            leveraging the use of a CAN bus communications environment, coupled with networked systems to create a means of tracking the elevator’s 
            operational/diagnostics data. The elevator car’s position and status must also be viewable to computers over the Internet. 
            See the system diagram, below. The <span class="bold">final project demonstration</span> begins with the elevator car at an initial position. 
            As buttons are pressed at each floor, the system will direct the car to service the requests in a safe and controlled manner, 
            ubject to requirements for appropriate and predictable speed and acceleration. 
            The system will use a distance sensor to track the car position at all times, determining the distance from the bottom of the elevator shaft, 
            and thus determine the next floor number. Buttons will be handled over the <span id="boldtext">CAN bus</span>. In the first phase of the project, 
            application of the above mentioned concepts and skills is demonstrated through the specification, design, programming, 
            and testing of an <span id="boldtext"> HCS12-based embedded controller </span> (Axeman development unit) or similar for low-level communications between buttons, displays, 
            and sensors (implemented via hardware available in our lab). This controller will communicate with the sensors and call buttons using the CAN bus 
            (see Figure-1). Each call station will consist of
        </p>
        <ul>
            <li>Two Buttons (up and down) and two LEDs to indicate the selection</li>
            <li>A display panel, which will show the elevator car's position</li>
        </ul>
        <p>There will also be another controller for:</p>
        <ul>
            <li>Floor selection buttons and an LED for each button, and</li>
            <li>Two buttons for door-open and door-close and with assciated LEDs</li>
        </ul>
        <p>
                The distance sensor will be interfaced directly to the controller to provide a distance estimate, which can be displayed on an LCD or 7-segment LED display and ultimately used for positional feedback. The elevator <span class="bold">motor</span> will interface with the controller via servo electronics.
        </p>
        <figure class="image">
            <img src="images/fig1.jpg" alt="schematic" title="Schematic">
            <figcaption>
                    Figure-1 <br>
                    (Note: Above figure depicts an approximate schematic of the system. Actual implementation may be different from this.)
            </figcaption>
        </figure>
        <p>
            An additional requirement is that student groups will create a <span class="underline">common</span> CAN message specification to which all groups will adhere. The intent is to ensure that any embedded system from one group can be removed and added to another group, with no required changes in embedded software. 
        </p>
        <p>
                The minimal project (in <span class="bold">Phase 1</span>) is a CAN network consisting of the controller, the call stations, the distance sensor, and LCD/7 Segment display. Extra credit projects will extend both the hardware design and the software capabilities to include additional functionality; however, these must be approved by the faculty team prior to embarking on extra credit work. Examples of possible extensions include a passenger on/off detection and counter system to enable the tracking of elevator utilization, or a security camera control system. 
        </p>
        <p>
                In <span class="bold">Phase 2</span>, the elevator controller will also interface to a PC on a Local Area Network (LAN), and thence <span class="underline">to the Internet</span> (see Figure-2). Each group will make its own decision on what type of CAN-LAN interface it wants to implement. Events from the elevator’s operation will be logged (by the controller) to a computer on the LAN (called the Elevator Monitor or EM), which will contain software designed, programmed and tested by the student group. This latter software will consist of two parts: 
        </p>
        <ol>
            <li><span class="bold">A data server</span> which will monitor and store data from the controller/CAN network, and</li>
            <li><span class="bold">A diagnostics display program </span> that will collect and display this data on the elevator module or at any other PC connected by a LAN interface to the elevator module. An aspect of elevator control (such as shutting the elevator down completely, or requesting the elevator via a phone app rather than the floor button) will be included. Finally, in Phase 2, software will be developed to retrieve elevator status information from the elevator module, over an Internet connection. </li>
        </ol>
        <figure class="image">
            <img src="images/fig2.jpg" alt="can network" title="Can schematic">
            <figcaption>
                Figure-2<br>
                (Note: Above figure depicts an approximate schematic of the system. Actual implementation may be different from this.)</figcaption>
        </figure>
        <p>
                In <span class="bold">Phase 3</span> the two modules (developed in phases 1 and 2) will be integrated to complete the system. This phase also encourages each student group to incorporate features that are not specifically stated in this charter document. This phase includes a final demonstration, oral presentation and report. Students will work in groups of three or four students (if applicable).
        </p>
        <h2>
            Milestones
        </h2>
        <p>
            This is a summary of the milestone dates for each phase. A complete breakdown of the detailed tasks in each phase may be found in the <span id="under"> Project Charter </span>
        </p>
        <table>
            <thead>
                <th>Deadline</th>
                <th>Deliverable</th>
            </thead>
            <tbody>
                <tr>
                    <td>Beginning of week 5</td>
                    <td>Phase 1 Task</td>
                </tr>
                <tr>
                    <td>Beginning of week 12</td>
                    <td>Phase 2 Task</td>
                </tr>
                <tr>
                    <td>End of Week 14</td>
                    <td>Phase 3 Task</td>
                </tr>
            </tbody>
        </table>
        </div>
        <footer>Copywrite &copy William Davidson</footer>
                    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.min.js"></script>

    <script>
            $(function(){
                $("#nav-placeholder").load("nav.php", function(){
                $("#details").addClass("active");
            });
            });
        </script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>


        </div>
    </body>

    

</html>
<?php


?>