
<?php
echo '<!DOCTYPE html>';
echo '<!--';
echo 'To change this license header, choose License Headers in Project Properties.';
echo 'To change this template file, choose Tools | Templates';
echo 'and open the template in the editor.';
echo '-->';
echo '<html lang="en">';
echo '  <head>';
echo getTitle($_GET['page'], $_GET['section']);
echo '    <meta charset="UTF-8">';
echo '    <meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">';
echo '    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>';
echo '    <link rel="stylesheet" href="style.css">';
echo '  </head>';
echo '  <body style="width:70em; margin: auto;">';
echo '    <div class="container-fluid">';
echo '      <div class="row">';
echo '        <div class ="col-sm-12">';

echo '          <img class="header" width="951px" height= "100px"alt="header" src="header.PNG">';
echo '        </div>';
echo '      </div>';
echo '      <div class="row">';
echo '        <div class="col-sm-12">';
echo '          <ul class="menu">';
echo '            <li ' . (isset($_GET['page']) && $_GET['page'] == 'home' ? 'class="active"' : '') . '><a href="index.php?page=home">Home</a></li>';
echo '            <li ' . (isset($_GET['page']) && $_GET['page'] == 'about' ? 'class="active"' : '') . '><a href="index.php?page=about">About Us</a></li>';
echo '            <li ' . (isset($_GET['page']) && $_GET['page'] == 'degrees' ? 'class="active"' : '') . '><a href="index.php?page=degrees">Degrees</a></li>';
echo '            <li ' . (isset($_GET['page']) && $_GET['page'] == 'faculty' ? 'class="active"' : '') . '><a href="index.php?page=faculty">Faculty</a></li>';
echo '           <li ' . (isset($_GET['page']) && $_GET['page'] == 'contact' ? 'class="active"' : '') . '><a href="index.php?page=contact">Contact</a></li>';
echo '          </ul>';
echo '        </div>';
echo '      </div>';

 echo getSideMenu($_GET['page'], $_GET['sub']);
echo getContent($_GET['page'], $_GET['sub']);
echo '        <div class="col-sm-12">';
echo '      <p>
            &copy; Satya Sripada B

        </p>';
echo '    </div>';
echo '    </div>';
echo '  </body>';
echo '</html>';

function getTitle($page, $section) {
     if ($page == 'home')
        return '<title>Home</title>';
    elseif ($page == 'about')
        return '<title>About Us</title>';
    elseif ($page == 'degrees')
        return '<title>Degrees</title>';
    elseif ($page == 'faculty')
        return '<title>Faculty</title>';
    elseif ($page == 'contact')
        return'<title>Contact Us</title>';
}

function getSideMenu($page, $section) {

    if ($page == 'degrees') {
        $content.=' <div class="row">';
        $content.='<div class="col-sm-2">';
        $content.='<ul class="submenu">';
        $content .=' <li ' . (isset($section) && $section == 'acyber' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=acyber">Associate in Cybersecurity</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'asit' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=asit">Associate of Applied Science in  Information Technology</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'bcs' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=bcs">Bachelor of Science in ComputerScience</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'bedu' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=bedu">Bachelor of Science in education</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'bcyber' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=bcyber">Bachelor of Science in Cybersecurity</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'bis' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=bis">Bachelor of Science in InformationSystems</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'bit' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=bit">Bachelor of Science in Information Technology </a></li>';
        
        $content .= ' <li ' . (isset($section) && $section == 'msit' ? 'class="active"' : '' ) . '><a href ="index.php?page=degrees&sub=msit">Master of Science in Information Technology</a></li>';
        $content.='</ul>';
        $content.='</div>';
        
       if ($page == 'degrees'&&$section==''){
        $content .= '<div class="col-sm-10">';
         $content .= ' <h3>Degree Programs</h3>
      
      <p>
      The Department of Computer and Information Science offers the student a 
      choice of eight degree options:
      </p>
      <dl>
        <dt><a href="index.php?page=degrees&sub=acyber">Associate of Applied Science in Cybersecurity</a></dt>
        <dd>
          The Associates of Applied Science (AAS) in Cybersecurity graduate will understand the techniques used
          to compromise and infiltrate systems as well as the proven methods to protect data. The AAS in
          Cybersecurity degree includes courses in programming, wireless technologies, mathematics, and networking
          with focused concentrations in both theory and practical hands-on experience.
        </dd>
        <dt><a href="index.php?page=degrees&sub=ait">Associate of Applied Science in Information Technology</a></dt>
          <dd>
            The Associate of Science in Information Technology enables students to develop skills in the areas of
            web processing, databases, networking, programming, and various operating systems. These skills enable
            students to seek positions within the information technology industry.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bcs">Bachelor of Science in Computer Science</a></dt>
          <dd>
            The Bachelor of Science in Computer Science prepares students for careers as systems programmers in a
            scientific and/or engineering environment and for graduate work in computer science. Mathematics and
            engineering courses supplement a strong core of computer science courses, enabling students to design
            and implement software that requires complicated computations, data structures, and interfaces.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bedu">Bachelor of Science in Computer Science Education for Teacher Licensure</a></dt>
          This bs in edu
                  <dd>
          </dd>
          <dt><a href="index.php?page=degrees&sub=bcyber">Bachelor of Science in Cybersecurity</a></dt>
          <dd>
            The rise in cyber threats has created an unprecedented demand for cybersecurity specialists. Data
            breaches, malware infections, and software vulnerabilities are common in today"s technology and it is
            critical to fully understand how these attacks occur, how to prevent them, and how to recover. A
            cybersecurity major will understand techniques used as well as the best methods to protect data. The
            cybersecurity degree includes courses in programming, wireless technologies, mathematics, and
            networking concentrating on theory and hands-on experience.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bis">Bachelor of Science in Information Systems</a></dt>
          <dd>
            The Bachelor of Science in Information Systems prepares students for careers as application 
            programmers/analysts in a business environment and for further graduate work in information systems.
            Business courses supplement a strong core of technical courses to enable students to design and
            implement business process systems that require programming, databases, web development, networking,
            and client-server processing.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bit">Bachelor of Science in Information Technology</a></dt>
          <dd>
            The Bachelor of Science in Information Technology prepares students for careers in administering
            heterogeneous computer systems and networks. The curriculum consists of an integrated set of courses
            in networking, web development and administration, database development and administration, systems
            administration, and computer forensics.
          </dd>
          <dt><a href="index.php?page=degrees&sub=mit">Master of Science in Information Technology</a></dt>
          <dd>
          The Master of Science in Information Technology is a study of the
          hardware and software mechanisms used to implement modern information
          systems.  It includes coverage of local-area networks, database,
          operating systems, the Internet, and the web.  Particular emphasis 
          is placed on the use of information systems in business and education.
          The student is offered two specialty programs:  one in Computer-Based
          Instructional Technology, and one in Information Technolgy.
          Each program is built around a common core of three important 
          technologies:  networking, web development, database design and 
          implementation.
          <br/>
          
        </dd>
      </dl>';
         $content.='</div>';
       }

      
    } elseif ($page == 'faculty') {
        $content.=' <div class="row">';
        $content.='<div class="col-sm-2">';
        $content .='<ul class="submenu">';
        $content .= ' <li ' . (isset($section) && $section ==  'mbrown' ? 'class="active"' : '') . '><a href="index.php?page=faculty&sub=mbrown">Matt Brown</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'lmoody' ? 'class="active"' : '') . '><a href="index.php?page=faculty&sub=lmoody">Lucas Moody</a></li>';
        $content .= ' <li ' . (isset($section) && $section == 'dh' ? 'class="active"' : '') . '><a href="index.php?page=faculty&sub=dh">dhoelzeman</a></li>';
        $content.='</ul>'; 
        $content.='</div>';
        if ($page == 'faculty'&&$section==''){
        $content .= '<div class="col-sm-10">';
         $content .= ' <h3>Faculty</h3>';
             }
        
        
    }
          return $content;
          
}

function getContent($page, $section) {
     if ($page == 'home'|| $page=='') {
     $content .= ' <p>
        Arkansas Tech University"s Computer and Information Science
        program is designed to provide students with the fundamental
        knowledge and skills required to initiate and maintain a
        successful career in the information systems field. All
        students in our program are exposed to a variety of hardware
        platforms and programming languages. Hands on experience in
        the design and implementation of a complete information
        systems project is attained in the student"s senior year.
        </p>
        <p>
        The Department offers eight degree programs:
        </p>
        <dl>
          <dt><a href="index.php?page=degrees&sub=acyber">Associate of Applied Science in Cybersecurity</a></dt>
          <dd>
            The Associates of Applied Science (AAS) in Cybersecurity graduate will understand the techniques used
            to compromise and infiltrate systems as well as the proven methods to protect data. The AAS in
            Cybersecurity degree includes courses in programming, wireless technologies, mathematics, and networking
            with focused concentrations in both theory and practical hands-on experience.
          </dd>
          <dt><a href="index.php?page=degrees&sub=ait">Associate of Applied Science in Information Technology</a></dt>
          <dd>
            The Associate of Science in Information Technology enables students to develop skills in the areas of
            web processing, databases, networking, programming, and various operating systems. These skills enable
            students to seek positions within the information technology industry.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bcs">Bachelor of Science in Computer Science</a></dt>
          <dd>
            The Bachelor of Science in Computer Science prepares students for careers as systems programmers in a
            scientific and/or engineering environment and for graduate work in computer science. Mathematics and
            engineering courses supplement a strong core of computer science courses, enabling students to design
            and implement software that requires complicated computations, data structures, and interfaces.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bedu">Bachelor of Science in Computer Science Education for Teacher Licensure</a></dt>
          <dd>
          </dd>
          <dt><a href="index.php?page=degrees&sub=bcyber">Bachelor of Science in Cybersecurity</a></dt>
          <dd>
            The rise in cyber threats has created an unprecedented demand for cybersecurity specialists. Data
            breaches, malware infections, and software vulnerabilities are common in today"s technology and it is
            critical to fully understand how these attacks occur, how to prevent them, and how to recover. A
            cybersecurity major will understand techniques used as well as the best methods to protect data. The
            cybersecurity degree includes courses in programming, wireless technologies, mathematics, and
            networking concentrating on theory and hands-on experience.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bis">Bachelor of Science in Information Systems</a></dt>
          <dd>
            The Bachelor of Science in Information Systems prepares students for careers as application 
            programmers/analysts in a business environment and for further graduate work in information systems.
            Business courses supplement a strong core of technical courses to enable students to design and
            implement business process systems that require programming, databases, web development, networking,
            and client-server processing.
          </dd>
          <dt><a href="index.php?page=degrees&sub=bit">Bachelor of Science in Information Technology</a></dt>
          <dd>
            The Bachelor of Science in Information Technology prepares students for careers in administering
            heterogeneous computer systems and networks. The curriculum consists of an integrated set of courses
            in networking, web development and administration, database development and administration, systems
            administration, and computer forensics.
          </dd>
          <dt><a href="index.php?page=degrees&sub=msit">Master of Science in Information Technology</a></dt>
          <dd>
            The Master of Science in Information Technology is a study of the
            hardware and software mechanisms used to implement modern information
            systems.  It includes coverage of local-area networks, database,
            operating systems, the Internet, and the web.  Particular emphasis 
            is placed on the use of information systems in business and education.
            The student is offered two specialty programs:  one in Computer-Based
            Instructional Technology, and one in Information Technology.
            Each program is built around a common core of three important 
            technologies:  networking, web development, database design and 
            implementation.
          </dd>

        </dl>
      ';
     } 
     elseif ($page == 'about'){
          $content .= ' <div class="col-sm-12">';
        $content .='<h3>About Us: Department Mission</h3>
                    <p>
                        The mission of the Department of Computer and Information Science is to 
                        produce men and women who can assess, develop, and maintain business and 
                        scientific computing systems, and who are capable of continued learning 
                        and ethical practice in computing.
                    </p>
                    <p>
                        To achieve this mission the department provides a professional 
                        environment that introduces students to relevant computing concepts, 
                        systems, and methodologies through a curriculum that effectively blends 
                        theory with practice.  There are three critical components to creating 
                        this professional environment: 
                    </p>
                    <ol>
                        <li>a faculty dedicated to student learning</li>
                        <li>a diverse set of computing resources</li>
                        <li>a curriculum that can be tailored to satisfy individual objectives</li>
                    </ol>
                    <p>
                        The department is committed to providing knowlegeable and caring faculty;
                        access to a full range of computers, operating systems, programming 
                        languages, and application packages; and curricular options that address 
                        the needs of modern business and scientific computing.
                    </p>' ;
        $content .= ' <div>';
     }
     elseif ($page == 'contact'){
         if(isset($_POST['submit'])&&$_POST['submit']!=''){
         $to=$_POST['email'];
$subject="website Test";
$txt=$POST['message'];
$headers="from:noreply@robertlatus.com";
mail($to,$subject,$txt,$headers);
$sent = true;
         }
       $content .= '<div class="col-sm-8">';
         $content .= ' <h3>Please send your message below. We will get back to you at the earliest!</h3>

                    <form action="index.php?page=contact" method="post">
'.(isset($sent) && $sent == true ? 'email sent': '').'
                        <div class="form-group">

                            <label>Name</label> ;

                            <input type="text" class="form-control" name="name"/>

                        </div>

                        <div class="form-group">

                            <label>Email ID</label>;
                            

                            <input type="text" class=" form-control" name="email"/>

                        </div>

                        <div class="form-group">

                            <label>Message</label>;

                            <textarea class="form-control" name="message" ></textarea>

                        </div>

                        <div class="form-group">

                            <input class="btn btn-success" type="submit" name="submit" value="Submit"/>

                        </div>


                    </form>

                </div>
                <br/><div class="col-sm-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13025.44697762171!2d-93.135642!3d35.296992!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87cc5307b6f59213%3A0xdebc9888e06755ab!2sCorley%2C%201811%20N%20Boulder%20Ave%2C%20Russellville%2C%20AR%2072801!5e0!3m2!1sen!2sus!4v1568137712770!5m2!1sen!2sus" 
                            width="300" height="250" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
             <div style="clear: both;"></div>
      </div>
        <div id="contact">
          <p class="left">
           
         
         
          </p>
          <div class="col-sm-9">
            <br/>
       
         
          Phone: <a href="tel:(479)-964-0876">(479) 964-0876</a><br />
          e-mail: <a href="mailto:coms@atu.edu">coms@atu.edu</a><br />
          URL: <a href="http://cs.atu.edu/">http://cs.atu.edu/</a><br />
          <br />
          </p>
          </div>
          <br/>
  
         
        </div>';
      
        $content.='</div>';   
     }
    elseif (isset($section) && $section == 'asit') {
   

 $content .= ' <div class="col-sm-10">';
 $content .= ' <h1>A.A.S. In Information Technology</h1>
                    <p>The Associate of Applied Science in Information Technology program enables students
               to develop skills in the areas of web processing, databases, networking, programming,
               and various operating systems. These skills enable students to seek positions within
               the information technology industry.
            </p>';
 $content .= ' </div>';

 } elseif (isset($section) && $section == 'acyber') {
      $content .= '<div class="col-sm-10">';
    $content .= '<h2>Associate of Applied Science in Cybersecurity</h2>
                        <p>The rise in cyber threats has created an unprecedented demand for cybersecurity specialists.
                        Data breaches, malware infections, and software vulnerabilities are common in todays
                        technology and it is critical to fully understand how these attacks occur, how to
                        prevent them, and how to recover. A cybersecurity major will understand techniques
                        used as well as the best methods to protect data. The cybersecurity degree includes
                        courses in programming, wireless technologies, mathematics, and networking concentrating
                        on theory and hands-on experience.
    
                        </p>';
    $content .= ' </div>';
 }
elseif (isset($section) && $section == 'bcyber') {
      $content .= '<div class="col-sm-10">';
    $content .= '<h2>Bachelor of Science in Cybersecurity</h2>
                        <p>An Associates of Applied Science (AAS) in Cybersecurity graduate will understand the
                           techniques used to compromise and infiltrate systems as well as the proven methods
                           to protect data. The AAS in Cybersecurity degree includes courses in programming,
                           wireless technologies, mathematics, and networking with focused concentrations in
                           both theory and hands-on experience.
                        </p>';
    $content .= ' </div>';
 }
 elseif ($section == 'bcs') {
             $content .= '<div class="col-sm-10">';
            $content .= '<h1>B.S. In Computer Science</h1>
                    <p>The Bachelor of Science in Computer Science (BS-CS) program prepares students for
               careers as systems programmers in a scientific and/or engineering environment and
               for further graduate work in computer science. Mathematics and engineering courses
               supplement a strong core of computer science courses, enabling students to design
               and implement software that requires complicated computations, data structures, and
               interfaces.
            </p>
            
            <h3>Program Educational Objectives</h3>
            
            <p>The mission of the Department is to produce men and women who can assess, develop,
               and maintain business and scientific computing systems, and who are capable of continued
               learning and ethical practice in computing.
            </p>
            
                       
            <h6>In Accomplishing This Mission, Within the first few years following graduation, The
               Graduates Of The BS-CS Degree Program Will:
            </h6>
            
            <ol>
               
               <li>Communicate effectively using terminology and processes that are appropriate for the
                  field of computer science.
               </li>
               
               <li>Work efficiently and effectively in a team environment to develop appropriate computer-based
                  systems to satisfy stated requirements.
               </li>
               
               <li>Solve complex computational problems using appropriate models, techniques, and abstractions.</li>
               
               <li>Conduct themselves in a professional and ethically responsible manner.</li>
               
               <li>Learn new trends and technology and willingly adapt to new systems and software environments.</li>
               
            </ol>
            
            <h3>Student Outcomes</h3>
            
            <p>In support of the program educational objectives above, the curriculum of the Computer
               Science Program is designed to enable students to attain the following outcomes:
            </p>
                       
            <ol>
               
               <li>Analyze a complex computing problem and to apply principles of computing and other
                  relevant disciplines to identify solutions.
               </li>
               
               <li>Design, implement, and evaluate a computing-based solution to meet a given set of
                  computing requirements in the context of the program’s discipline.
               </li>
               
               <li>Communicate effectively in a variety of professional contexts.</li>
               
               <li>Recognize professional responsibilities and make informed judgments in computing practice
                  based on legal and ethical principles.
               </li>
               
               <li>Function effectively as a member or leader of a team engaged in activities appropriate
                  to the program’s discipline.
               </li>
               
               <li>Apply computer science theory and software development fundamentals to produce computing-based
                  solutions. (Unique to computer science)
               </li>
               
            </ol>
            
           
            
            <p>*Data include graduation numbers for previous Summer (e.g., 2018-2019 includes Summer
               2018, Fall 2018, and Spring 2019).
            </p>';
                $content .= '</div>';
            
        }
        elseif ($section == 'bis') {
             $content .= '<div class="col-sm-10">';
            $content .= '<h1>B.S. In Information Systems</h1>
                    <p>The Bachelor of Science in Information Systems (BS-IS) program prepares students for
               careers as application programmers/analysts in a business environment and for further
               graduate work in information systems. Business courses supplement a strong core of
               technical courses to enable students to design and implement business processing systems
               that require programming, databases, web development, networking, and client-server
               processing.
            </p>
            
            <h3>Program Educational Objectives</h3>
            
            <p>The mission of the Department is to produce men and women who can assess, develop,
               and maintain business and scientific computing systems, and who are capable of continued
               learning and ethical practice in computing.
            </p>
            
            <!--<h6>In Accomplishing This Mission The Graduates OfThe BS-IS Degree Program Will:</h6>-->
            
            <h6>In Accomplishing This Mission, Within the first few years following graduation, The
               Graduates Of The BS-IS Degree Program Will:
            </h6>
            
            <!--<ul style="list-style-type: square;">-->
            
            <ol>
               
               <li>Communicate effectively using terminology and processes that are appropriate for the
                  field of information systems.
               </li>
              
               
               <li>Work efficiently and effectively in a team environment to develop appropriate computer-based
                  systems to satisfy stated requirements.
               </li>
               
               <li>Solve complex computational problems using appropriate models, techniques, and abstractions.</li>
               
               <li>Conduct themselves in a professional and ethically responsible manner.</li>
               
               <li>Learn new trends and technology and willingly adapt to new systems and software environments.</li>
               
            </ol>
            
            <h3>Student Outcomes</h3>
            
          
            
            <p>In support of the program educational objectives above, the curriculum of the Information
               Systems Program is designed to enable students to attain the following outcomes:
            </p>
            
                       
            <ol>
               
               <li>Analyze a complex computing problem and to apply principles of computing and other
                  relevant disciplines to identify solutions.
               </li>
               
               <li>Design, implement, and evaluate a computing-based solution to meet a given set of
                  computing requirements in the context of the program’s discipline.
               </li>
               
               <li>Communicate effectively in a variety of professional contexts.</li>
               
               <li>Recognize professional responsibilities and make informed judgments in computing practice
                  based on legal and ethical principles.
               </li>
               
               <li>Function effectively as a member or leader of a team engaged in activities appropriate
                  to the program’s discipline.
               </li>
               
               <li>Support the delivery, use, and management of information systems within an information
                  systems environment. (Unique to information systems)
               </li>
               
            </ol>
            		
            
            <h3>Enrollment and Graduation</h3>
           
            <p>*Data include graduation numbers for previous Summer (e.g., 2018-2019 includes Summer
               2018, Fall 2018, and Spring 2019).
            </p>';
                $content .= '</div>';
        }
     elseif ($section == 'bit') {
         $content .= '<div class="col-sm-10">';
            $content .= '<h1>B.S. In Information Technology</h1>
                     <p>The B.S. in Information Technology prepares students for careers in administering
               heterogeneous computer systems and networks.
            </p>
            
            <h3>The Curriculum Consists Of An Integrated Set Of Courses In:</h3>
            
            <blockquote>
               
               <p>Networking<br>Web Development &amp; Administration<br>Database Development &amp; Administration<br>Systems Administration<br>Computer Forensics
               </p>
               
            </blockquote>
            
            <h3>Program Educational Objectives</h3>
            
            <p>The mission of the Department is to produce men and women who can assess, develop,
               and maintain business and scientific computing systems, and who are capable of continued
               learning and ethical practice in computing. In accomplishing this mission the graduates
               of the BS-IT degree program will:
            </p>
            
            <ul style="list-style-type: square;">
               
               <li>Communicate effectively using terminology and processes that are appropriate for the
                  field.
               </li>
               
               <li>Work efficiently and effectively in a team environment to develop appropriate computer-based
                  systems to satisfy stated requirements.
               </li>
               
               <li>Solve complex computational problems using appropriate models, techniques, and abstractions.</li>
               
               <li>Conduct themselves in a professional and ethically responsible manner.</li>
               
               <li>Learn new trends and technology and willingly adapt to new systems and software environments.</li>
               
            </ul>
            
            <h3>Student Outcomes</h3>
            
            <h5>In Support Of The Program Educational Objectives Above, The Curriculum Of The Information
               Technology Program Is Designed To Enable Students To Attain The Following Outcomes:
            </h5>
            
            <blockquote>
               
               <ol style="list-style-type: upper-alpha;">
                  
                  <li>An ability to apply knowledge of computing and mathematics appropriate to the discipline</li>
                  
                  <li>An ability to analyze a problem, and identify and define the computing requirements
                     appropriate to its solution
                  </li>
                  
                  <li>An ability to design, implement and evaluate a computer-based system, process, component,
                     or program to meet desired needs
                  </li>
                  
                  <li>An ability to function effectively on teams to accomplish a common goal</li>
                  
                  <li>An understanding of professional, ethical, legal, security and social issues and responsibilities</li>
                  
                  <li>An ability to communicate effectively with a range of audiences</li>
                  
                  <li>An ability to analyze the local and global impact of computing on individuals, organizations,
                     and society
                  </li>
                  
                  <li>Recognition of the need for and an ability to engage in continuing professional development</li>
                  
                  <li>An ability to use current techniques, skills, and tools necessary for computing practice</li>
                  
                  <li>An ability to use and apply current technical concepts and practices in the core information
                     technologies
                  </li>
                  
                  <li>An ability to identify and analyze user needs and take them into account in the selection,
                     creation, evaluation and administration of computer-based systems
                  </li>
                  
                  <li>An ability to effectively integrate IT-based solutions into the user environment</li>
                  
                  <li>An understanding of best practices and standards and their application</li>
                  
                  <li>An ability to assist in the creation of an effective project plan</li>
               </ol>
            </blockquote>';
                $content .= '</div>'; 
     }
     elseif ($section == 'bedu') {
        $content .= '<div class="col-sm-10">';
            $content .= '<h1>College of <span class="atu-yellow">Education</span></h1>
                     
                     <p><em><span style="font-size: 8pt;"><sup>1</sup>Teacher candidate preparing to teach in secondary schools must complete the courses
                              required for specialization in a teaching concentration. These are listed in departmental
                              sections of the catalog and recommended curricula patterns, including teacher licensure
                              requirements, set forth in the College of Education section of this catalog.</span></em></p>
                     <p>The College of Education provides guidance and professional courses for the teacher
                        candidate who plans to teach in elementary, middle level, and secondary schools. The
                        teacher education program is accredited by the National Council for Accreditation
                        of Teacher Education (NCATE).
                     </p>
                     <p>Teacher candidates who plan to teach physical education, elementary education, or
                        middle level must enroll in the College of Education. Those who elect to prepare for
                        teaching in other fields must enroll in schools appropriate to their interests in
                        teaching.
                     </p>
                     <p>For the freshman or sophomore teacher candidate who has not selected a major or specific
                        teaching level or area, the College recommends enrollment in the undeclared program
                        (see “Undecided Study”). In addition to taking the required general education courses,
                        teacher candidates in this program are encouraged to take such electives as will provide
                        them a good liberal education and help select a major field. Advisors in this program
                        are selected to provide guidance to undecided teacher candidates.
                     </p>
                 
                  <div class="medium-4 columns">
                     <aside class="quick-links">
                        <h5>Dr. Linda Bean, Dean</h5>
                        <p>Crabaugh 212&nbsp;<br>(479) 880-4401<br><a href="mailto:lbean@atu.edu?subject=">lbean@atu.edu</a><br><a href="/education/">College Website</a><span style="font-size: 12pt;"><br></span></p>
                        <p><strong>Dr. Tim Carter, Associate Dean</strong><br>Crabaugh 203<br>(479)968-0420<br><a href="mailto:tcarter@atu.edu?subject=">tcarter@atu.edu</a></p>
                     </aside>
                  </div>
                  <div class="medium-12 columns">
                     <p>In making a decision to enter the teaching profession, teacher candidates should seriously
                        consider the demands which this choice entails. Among these are scholarship and intellectual
                        curiosity; an interest in children and young people, and an understanding of their
                        interests, problems, and development; a thorough understanding of the principles and
                        skills employed by effective teachers; and an interest in and understanding of the
                        role of the school in our society.
                     </p>
                     <p>Teacher candidates who elect the professional program in teacher education will complete
                        their study in at least two stages. See the appropriate catalog section for the requirements
                        for specific programs. Some courses in the area of specialization should also be completed.
                        <strong>Admission to Arkansas Tech University is a prerequisite to, but separate from, admission
                           to teacher education.</strong> Declaration of a major in one of the University’s teacher education programs is also
                        a prerequisite to making formal application for admission to teacher education. Even
                        though admission to Tech and declaration of a teaching major are necessary conditions
                        for admission to teacher education, they are not the only requirements. Other criteria
                        are listed in the section below.
                     </p>
                     <h2>Admission &amp; Retention in Teacher Education at Tech</h2>
                     <p>Professional programs are composed of courses and experiences designed to complete
                        the undergraduate stage of professional preparation for teaching. Admission is by
                        application to the Admission and Retention Committee of the Teacher Education Council.
                        Before a teacher candidate may enroll in professional education courses at the upper
                        division level (the required 3000 and 4000 level professional education courses),
                        he or she must be formally admitted to teacher education at Tech. Application forms
                        may be obtained from the office of the Dean of the College of Education (Crabaugh
                        204) or the office of the Director of Teacher Education Student Services (Crabaugh
                        109).
                     </p>
                     <p>To be admitted to programs in secondary education, teacher candidates must have two
                        assigned advisors, one from the College of Education and one from the department representing
                        their teaching concentration, have the approval of both advisors, satisfactorily complete
                        the pre-admission requirements, have a cumulative grade point average of 2.70 on all
                        college work completed including transfer work, and submit a plan of study approved
                        by both advisors. An early childhood education or middle level education major will
                        have one advisor from the Department of Curriculum and Instruction. <strong>Admission to teacher education will be recommended by the academic advisors and determined
                           by the Admission and Retention Committee based on the following considerations: completion
                           of English composition courses, an oral communication course, a college-level mathematics
                           course, and the appropriate introductory education course with grades of “C” or higher,
                           and completion of the Core Academic Skills Test with scores equal to or greater than
                           the scores determined by the Arkansas Department of Education.</strong> Other factors which reflect professional competence, including moral and emotional
                        stability, physical and mental health, intellectual curiosity, use of English, social
                        awareness, and professional interest will be considered by the Admission and Retention
                        Committee. Formal screening and subsequent admission into teacher education and the
                        monitoring of satisfactory progress in the teacher preparation program represent institutional
                        obligations to the teaching profession, the schools served by and working with the
                        University’s programs, and the agencies that approve and accredit teacher education
                        programs. Once admitted to teacher education, the teacher candidate must maintain
                        satisfactory progress throughout the completion of the teacher education program according
                        to the standards cited above and any additional program standards in effect or lose
                        eligibility to continue in that program. Course sequences and prerequisites will be
                        followed carefully.
                     
                     <h2>Requirements for Teacher Licensure</h2>
                     
                     <p>Teacher candidates spend an average of 405 hours in the classroom during internship;
                        and the average faculty-teacher candidate ratio in supervised practice teaching is
                        5.0. All programs are approved by the Arkansas Department of Education. The teacher
                        education program at Tech is not designated by the State of Arkansas as a low-performing
                        program.
                     </p>';
                $content .= '</div>';  
     }
      elseif ($section == 'msit') {
       $content .= '<div class="col-sm-10">';
            $content .= '<h1>M.S. In Information Technology</h1>
                     <p>The Master of Science in Information Technology (MSIT) is a study of the hardware
               and software mechanisms used to implement modern information systems. It includes
               coverage of local-area networks, database, operating systems, the Internet, and the
               web. Particular emphasis is placed on the use of information systems in business and
               education. The student is offered two specialty programs: one in Computer-Based Instructional
               Technology (CBIT), and one in Information Technology (IT).
            </p>
            
            <h5>Each Program Is Built Around A Common Core Of Three Important Technologies:</h5>
            
            <blockquote>
               
               <p>Networking<br>Web Development<br>Database Design &amp; Implementation
               </p>
               
            </blockquote>
            
            <p>The CBIT specialty program enables a student to complete the degree through course-work
               directed to showing the application of computing technology to instruction.
            </p>
            
            <p>The IT specialty program is intended for students pursuing a career in technical support
               for business information systems.
            </p>
            
            <h5>The Focus Is On An Integrated Study Of:</h5>
            
            <blockquote>
               
               <p>Networking<br>Databases<br>The Web
               </p>
               
            </blockquote>
            
            <h5>Students Are Eligible To Apply For Unconditional Admission To The Master Of Science
               Degree Program In Information Technology If They Meet All Of The Following Requirements:
            </h5>
            
            <blockquote>
               
               <ol>
                  
                  <li>Applicants must meet the admission requirements for Graduate School.</li>
                  
                  <li>Applicants must have a background comparable to COMS1003 and COMS1403, which includes
                     familiarity with terminology and concepts related to word processing, spreadsheets,
                     and databases. This background may be demonstrated by previous coursework, work experience,
                     or by taking a test administered by the MSIT Graduate Committee.
                  </li>
                  
                  <li>Applicants have completed one math course beyond college algebra with a minimum grade
                     of "C".
                  </li>
                  
                  <li>Applicants to the CBIT program have completed a one-semester computer programming
                     course comparable to COMS2104 with a minimum grade of "C". Completions of one full
                     year of computer programming courses comparable to COMS2104 and COMS2203 with a minimum
                     grade of "C" are required for applicants to the IT program.
                  </li>
                  
                  <li>Applicants must submit recent (within the last five years) acceptable scores (as determined
                     by the faculty) of the Graduate Record Examination (GRE) to the Graduate School.
                  </li>
                  
               </ol>
               
            </blockquote>
            
            <p>Applicants who fail to meet the grade point requirement specified for unconditional
               admission or who are lacking background in computing, computer usage, or programming
               may be admitted conditionally by the MSIT Graduate Committee to earn a maximum of
               twelve graduate credit hours. If a cumulative 3.00 grade point average or better is
               achieved at the completion of twelve semester hours, the student will be granted unconditional
               admission.
            </p>';
                $content .= '</div>';   
     }
     elseif ($section == 'dh') {
       $content .= '<div class="col-sm-10">';
            $content .= '<h3>Faculty: David Hoelzeman</h3>
                    
                            <p class="title">
                            Professor of Computer and Information Science<br />
                            Department Head
                            </p>
                            <p>
                            Dr. Hoelzeman has a BS in Mathematics from University of Central Arkansas 
                            (1988) and a PhD in Computer Science from Louisiana State University 
                            (1993). His primary areas of interest are Web Development, Discrete 
                            Mathematics, Graph Theory, and Computer Music. Dr. Hoelzeman joined the 
                            Department January, 2000.
                            </p>
                            <p>
                            Office: Corley 232<br />
                            <a href="http://167.71.243.117/~mbandela/week3_Assignment/degrees/index.html">Course Websites</a><br />
                            <a href="mailto:dhoelzeman@atu.edu">dhoelzeman@atu.edu</a><br />
                             Phone: <a href="tel:(479)-968-0663">(479) 968-0663</a><br />
                            </p>';
            $content .= '</div>';
     }
     elseif ($section == 'lmoody') {
       $content .= '<div class="col-sm-10">';
            $content .= '<h3>Staff: Lucas Moody</h3>
                            <p>
                            Office: Corley 247<br />
                            <a href="mailto:lmoody@atu.edu">lmoody@atu.edu</a><br />
                               Phone: <a href="tel:(479)-692-9274">(479) 692-9274</a><br />
                            </p>';
                        
     }
     elseif ($section == 'mbrown') {
       $content .= '<div class="col-sm-10">';
            $content .= '<h3>Faculty: Matt Brown</h3>
                            <p class="title">
                            Associate Professor of Computer and Information Science 
                            </p>
                            <p>
                            Dr. Brown received his Ph.D. in Information Systems from Nova 
                            Southeastern University. He also holds an M.S. in Statistics as well as 
                            B.A. degrees in Mathematics and Physics from the University of Arkansas. 
                            Dr. Brown is also certified by the American Society for Quality as a 
                            Quality Engineer. He joined Arkansas Tech University in August of 2008. 
                            Prior to joining Arkansas Tech University, he held programming, data 
                            mining, and statistics positions in industry for nine years at the 
                            Wal-Mart Home Office and Tyson Foods World Headquarters. Dr. Brown is a 
                            member of Association for Computing Machinery (ACM), American Society 
                            for Quality (ASQ), and American Statistical Association (ASA). 
                            </p>
                            <p>
                            Office: Corley 241<br />
                            <a href="mailto:hbrown11@atu.edu">hbrown11@atu.edu</a><br />
                            Phone: <a href="tel:(479)-356-2161">(479) 356-2161</a><br />
                            </p>';
             $content .= '</div>';
     }
          
     $content .= '</div>';
    return $content;
}

 