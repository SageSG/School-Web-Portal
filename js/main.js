//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function lettersOnly(input) {
//regex=regular expression//
//g-global i-non-case sensitive//
    var regex = /[^a-z]/gi;
    //string replace method used//
    input.value = input.value.replace(regex, "");
}

function numbersOnly(input) {
    var regex = /[^1234567890]/g;
    input.value = input.value.replace(regex, "");
}

function populate(s1, s2) {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";//everytime function runs, its going to be made nothing again//
    //value|label //
    if (s1.value == "Which school are you from?") {
        var optionArray = ["Select your school first before selecting course|Select your school first before selecting course"]
    } else if (s1.value == "School of Information Technology") {
        var optionArray = ["Select course name|Select course name",
            "Business Enterprise IT|Business Enterprise IT",
            "Business Informatics|Business Informatics",
            "Business Intelligence & Analytics|Business Intelligence & Anaytics",
            "Cyber security & forensics|Cyber security & forensics",
            "Inforcomm & security/Engineering Informatics|Inforcomm & security/Engineering Informatics",
            "Information technology|Information technology",
            "Financial informatics|Financial informatics"];
    } else if (s1.value == "School of Interactive and Digital Media") {
        var optionArray = ["Select course name|Select course name",
            "Digital Game Art & Design|Digital Game Art & Design",
            "Motion Graphics & Broadcast Design|Motion Graphics & Broadcast Design",
            "Game Development & Technology|Game Development & Technology",
            "Animation|Animation",
            "Interaction design|Interaction design",
            "Digital Visual Effects|Digital Visual Effects"];
    } else if (s1.value == "School of Business Management") {
        var optionArray = ["Select course name|Select course name",
            "Food & Beverage business|Food & Beverage business",
            "Fund management & adminstration|Fund management & adminstration",
            "Hospitality & tourism management|Hospitality & tourism management",
            "Mass media management|Mass media management",
            "Banking & Finance|Banking & Finance",
            "Business management|Business management",
            "Accountancy & Finance|Accountancy & Finance",
            "Marketing|Marketing",
            "Sports & Wellness management|Sports & Wellness management"];
    } else if (s1.value == "School of Chemical and Life Sciences") {
        var optionArray = ["Select course name|Select course name",
            "Biologics & Process Technology|Biologics & Process Technology",
            "Chemical & Green Technology| Chemical & Green Technology",
            "Molecular Biotechnology|Molecular Biotechnology",
            "Chemical & Pharmaceutical Technology| Chemical & Pharmaceutical Technology",
            "Food Science & Nutrition|Food Science & Nutrition",
            "Medicinal Chemistry|Medicinal Chemistry",
            "Pharmaceutical Sciences| Pharmaceutical Sciences"
        ]
    } else if (s1.value == "School of Design") {
        var optionArray = ["Select course name|Select course name",
            "Industrial Design|Industrial Design",
            "Spatial Design|Spatial Design",
            "Sustainable Architectural Design|Sustainable Architectural Design",
            "Visual Communication|Visual Communication"
        ]
    } else if (s1.value == "School of Engineering") {
        var optionArray = ["Select course name|Select course name",
            "Common Engineering Programme|Common Engineering Programme",
            "Aerospace/Electrical/Electronics Programme|Aerospace/Electrical/Electronics Programme",
            "Aerospace/Mechatronics Programme|Aerospace/Mechatronics Programme",
            "Aeronautical & Aerospace Technology|Aeronautical & Aerospace Technology",
            "Aerospace Systems & Management|Aerospace Systems & Management",
            "Biomedical Engineering|Biomedical Engineering",
            "Digital & Precision Engineering|Digital & Precision Engineering",
            "Engineering with Business|Engineering with Business",
            "Electrical Engineering with Eco-Design|Electrical Engineering with Eco-Design",
            "Electronic Systems|Electronic Systems",
            "Mechatronics Engineering|Mechatronics Engineering",
            "Multimedia & Infocomm Technology|Multimedia & Infocomm Technology",
            "Nanotechnology & Materials Science|Nanotechnology & Materials Science",
            "Telematics & Media Technology|Telematics & Media Technology"
        ]
    } else if (s1.value == "School of Health Sciences") {
        var optionArray = ["Select course name|Select course name",
            "Nursing|Nursing",
            "Oral Health Therapy|Oral Health Therapy",
            "Social Sciences (Social Work)|Social Sciences (Social Work)"
        ]
    }
    for (var option in optionArray) {
        var pair = optionArray[option].split("|"); //ensure 2 items(value and label) with split method//
        var newOption = document.createElement("option"); //create <option> element//
        newOption.value = pair[0]; //1st side//
        newOption.innerHTML = pair[1]; //2nd side//
        s2.options.add(newOption); //added into slct2//
    }
}

function wordcount(count) {
    var cnt;
    var words = count.split(/\s/);
    cnt = words.length;
    var ele = document.getElementById('w_count');
    ele.value = cnt;
}



function textCounter(field, field2, maxlimit)
{
    var countfield = document.getElementById(field2);
    if (field.value.length > maxlimit) {
        field.value = field.value.substring(0, maxlimit);
        return false;
    } else {
        countfield.value = maxlimit - field.value.length;
    }
}

