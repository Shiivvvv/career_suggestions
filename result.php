<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Career Suggestions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Your Career Suggestions</h1>
        </header>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $stream = $_POST["stream"];
            $percentage = floatval($_POST["percentage"]);

            echo '<div class="student-info">';
            echo '<h2>Hello, ' . $name . '!</h2>';
            echo '<p><strong>Stream:</strong> ' . $stream . '</p>';
            echo '<p><strong>Percentage:</strong> ' . $percentage . '%</p>';
            echo '</div>';

            // Determine tier
            if ($percentage >= 85) {
                $tier = "high";
                $message = "Excellent performance! You are eligible for top-tier courses and prestigious colleges.";
            } elseif ($percentage >= 60) {
                $tier = "mid";
                $message = "Good performance! You have many good career options and reputed colleges available.";
            } else {
                $tier = "low";
                $message = "Don't worry! There are several diploma and certificate courses to build a strong career.";
            }

            echo '<div class="message-box">';
            echo '<p>' . $message . '</p>';
            echo '</div>';

            // Career Data
            $careers = [];

            if ($stream == "Science") {
                if ($tier == "high") {
                    $careers = [
                        [
                            "title" => "MBBS / BDS",
                            "desc" => "Pursue medicine or dental surgery. Requires NEET exam.",
                            "colleges" => "AIIMS Delhi, CMC Vellore, Maulana Azad Medical College, BHU"
                        ],
                        [
                            "title" => "B.Tech / B.E.",
                            "desc" => "Engineering in CS, Mechanical, Electrical, Civil, etc. Requires JEE.",
                            "colleges" => "IIT Bombay, IIT Delhi, BITS Pilani, NIT Trichy"
                        ],
                        [
                            "title" => "B.Sc (Research / Hons)",
                            "desc" => "Research oriented science programs in Physics, Chemistry, Biology.",
                            "colleges" => "IISc Bangalore, IISER Pune, Delhi University, BHU"
                        ],
                        [
                            "title" => "B.Arch",
                            "desc" => "Bachelor of Architecture. Requires NATA / JEE Paper 2.",
                            "colleges" => "IIT Kharagpur, SPA Delhi, CEPT University, NIT Calicut"
                        ]
                    ];
                } elseif ($tier == "mid") {
                    $careers = [
                        [
                            "title" => "B.Sc General",
                            "desc" => "Three-year degree in Physics, Chemistry, Maths, Biology, etc.",
                            "colleges" => "Delhi University, Mumbai University, Loyola College Chennai"
                        ],
                        [
                            "title" => "B.Pharmacy",
                            "desc" => "Four-year pharmacy degree. Good scope in pharma industry.",
                            "colleges" => "BITS Pilani, Manipal University, Jamia Hamdard, BHU"
                        ],
                        [
                            "title" => "BCA",
                            "desc" => "Bachelor of Computer Applications. Gateway to IT jobs.",
                            "colleges" => "Christ University, Symbiosis Pune, Amity University, Loyola College"
                        ],
                        [
                            "title" => "B.Sc Nursing",
                            "desc" => "Four-year nursing program. High demand in healthcare sector.",
                            "colleges" => "AIIMS Delhi, CMC Vellore, Manipal University, PGIMER Chandigarh"
                        ]
                    ];
                } else {
                    $careers = [
                        [
                            "title" => "Diploma in Engineering",
                            "desc" => "3-year polytechnic diploma in various engineering branches.",
                            "colleges" => "Government Polytechnic Mumbai, PSG Polytechnic, MSBTE colleges"
                        ],
                        [
                            "title" => "Paramedical Courses",
                            "desc" => "Lab Technician, Radiology, Physiotherapy diploma courses.",
                            "colleges" => "Apollo Hospitals, CMC Vellore, local medical colleges"
                        ],
                        [
                            "title" => "ITI Trades",
                            "desc" => "Electrician, Fitter, Mechanic, COPA, etc. Job-oriented training.",
                            "colleges" => "Government ITIs, NCVT affiliated institutes"
                        ]
                    ];
                }
            } elseif ($stream == "Commerce") {
                if ($tier == "high") {
                    $careers = [
                        [
                            "title" => "CA (Chartered Accountancy)",
                            "desc" => "Prestigious finance career. Start with CA Foundation after 12th.",
                            "colleges" => "ICAI direct registration, no college required; coaching in Aldine, VSI"
                        ],
                        [
                            "title" => "B.Com (Hons)",
                            "desc" => "Honors degree in Commerce. Excellent base for MBA, CA, CS.",
                            "colleges" => "SRCC Delhi, Lady Shri Ram College, Hansraj College, St. Xavier's Mumbai"
                        ],
                        [
                            "title" => "Economics (Hons)",
                            "desc" => "Study economic theory, policy, and research.",
                            "colleges" => "St. Stephen's Delhi, LSE India, JNU, Presidency College Kolkata"
                        ],
                        [
                            "title" => "BBA",
                            "desc" => "Bachelor of Business Administration. Pathway to MBA.",
                            "colleges" => "IIM Indore (IPM), NMIMS Mumbai, Christ University, Symbiosis"
                        ]
                    ];
                } elseif ($tier == "mid") {
                    $careers = [
                        [
                            "title" => "B.Com (General)",
                            "desc" => "Standard commerce degree covering accounting, finance, and business.",
                            "colleges" => "Delhi University, Mumbai University, Christ University, Amity"
                        ],
                        [
                            "title" => "Company Secretary (CS)",
                            "desc" => "Corporate governance and legal compliance career. Start with CSEET.",
                            "colleges" => "ICSI registration; coaching institutes across India"
                        ],
                        [
                            "title" => "Hotel Management",
                            "desc" => "Hospitality and tourism industry programs.",
                            "colleges" => "IHM Pusa Delhi, IHM Mumbai, Oberoi Centre, Welcomgroup"
                        ]
                    ];
                } else {
                    $careers = [
                        [
                            "title" => "Diploma in Accounting",
                            "desc" => "Short-term diploma focusing on practical accounting and Tally.",
                            "colleges" => "Local polytechnics, NIIT, ICAI-CPT foundation route"
                        ],
                        [
                            "title" => "Banking & Insurance Diploma",
                            "desc" => "Prepare for clerical and assistant roles in banks.",
                            "colleges" => "NIIT, Manipal Academy, local banking institutes"
                        ],
                        [
                            "title" => "Tally / GST Certification",
                            "desc" => "Accounting software certification for immediate job readiness.",
                            "colleges" => "Local computer institutes, NIIT, APTECH"
                        ]
                    ];
                }
            } elseif ($stream == "Arts") {
                if ($tier == "high") {
                    $careers = [
                        [
                            "title" => "BA LLB (Law)",
                            "desc" => "Integrated law degree. Become a lawyer or civil servant.",
                            "colleges" => "NLSIU Bangalore, NALSAR Hyderabad, NLU Delhi, Symbiosis Law"
                        ],
                        [
                            "title" => "BA (Hons) - Various Subjects",
                            "desc" => "History, Political Science, Psychology, Sociology, English, etc.",
                            "colleges" => "St. Stephen's Delhi, JNU, LSR, Presidency College, Ashoka University"
                        ],
                        [
                            "title" => "Journalism & Mass Communication",
                            "desc" => "Media, reporting, anchoring, digital content creation.",
                            "colleges" => "IIMC Delhi, Symbiosis Pune, XIC Mumbai, Jamia Millia Islamia"
                        ],
                        [
                            "title" => "Design (B.Des)",
                            "desc" => "Fashion, Graphic, Product, or Interior Design.",
                            "colleges" => "NIFT Delhi, NID Ahmedabad, Pearl Academy, Srishti Institute"
                        ]
                    ];
                } elseif ($tier == "mid") {
                    $careers = [
                        [
                            "title" => "BA (General)",
                            "desc" => "Flexible arts degree. Can choose major subjects.",
                            "colleges" => "Delhi University, Mumbai University, Panjab University, AMU"
                        ],
                        [
                            "title" => "BFA (Fine Arts)",
                            "desc" => "Painting, Sculpture, Applied Arts, Visual Communication.",
                            "colleges" => "MSU Baroda, Shantiniketan, JJ School of Arts, College of Art Delhi"
                        ],
                        [
                            "title" => "Social Work (BSW)",
                            "desc" => "Bachelor of Social Work. NGOs, CSR, and government roles.",
                            "colleges" => "Tata Institute of Social Sciences (TISS), Delhi University, Madras School of Social Work"
                        ]
                    ];
                } else {
                    $careers = [
                        [
                            "title" => "Diploma in Photography",
                            "desc" => "Professional photography and photo editing skills.",
                            "colleges" => "Local media institutes, AAFT Noida, Light & Life Academy"
                        ],
                        [
                            "title" => "Event Management Certificate",
                            "desc" => "Short course to start a career in event planning.",
                            "colleges" => "NIEM, EMDI Institute, local event management schools"
                        ],
                        [
                            "title" => "Foreign Language Courses",
                            "desc" => "Learn Spanish, German, French, Japanese for translator jobs.",
                            "colleges" => "Alliance Francaise, Goethe Institut, Jamia Millia Islamia, DU"
                        ]
                    ];
                }
            }

            echo '<div class="results">';
            foreach ($careers as $career) {
                echo '<div class="card">';
                echo '<h3>' . $career["title"] . '</h3>';
                echo '<p><strong>About:</strong> ' . $career["desc"] . '</p>';
                echo '<p class="colleges"><strong>Famous Colleges:</strong> ' . $career["colleges"] . '</p>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<div class="message-box">';
            echo '<p>Please submit the form on the homepage.</p>';
            echo '</div>';
        }
        ?>

        <div class="back-link">
<a href="index.html">&larr; Back to Home</a>
        </div>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> Career Guidance Portal. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

