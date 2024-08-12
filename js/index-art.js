/********************facility-array-objects**************/
var facility=[
	{
		facUrl:"pediatric.png",
		facContent:"At Shrikant Hospitals we treat each child with Extra time,Extra Monitoring,",
		facLink:"pediatric-hospital-bilaspur-chhattishgarh.php",
		facAlt:"PEDIATRIC DEPARTMENT"
	},
	{
		facUrl:"ped-sur.png",
		facContent:"Surgical treatment for congenital anomalies such as cleft lip and",
		facLink:"pediatric-surgery-hospital-bilaspur-chhattishgarh.php",
		facAlt:"PEDIATRIC SURGERY"
	},
	{
		facUrl:"medicine.png",
		facContent:"General Medicine is all about primary care. Patients of all ages",
		facLink:"general-medicine-hospital-bilaspur-chhattishgarh.php",
		facAlt:"GENERAL MEDICINE"
	},
	{
		facUrl:"gen-sur.png",
		facContent:"Simple, Complex and critical surgeries are handled by our expert surgeons",
		facLink:"general-surgery-hospital-bilaspur-chhattishgarh.php",
		facAlt:"GENERAL SURGERY"
	},
	{
		facUrl:"orth.png",
		facContent:"Hand & Arm Surgery is used to treat conditions that affect",
		facLink:"orthopedic-hospital-bilaspur-chhattishgarh.php",
		facAlt:"ORTHOPEDIC"
	},
	{
		facUrl:"ent.png",
		facContent:"The department treats patients with high precision and efficiency using",
		facLink:"ent-hospital-bilaspur-chhattishgarh.php",
		facAlt:"ENT"
	},
	{
		facUrl:"neurology.png",
		facContent:"In-depth assessments to diagnose and manage neurological conditions",
		facLink:"neurology-hospital-bilaspur-chhattishgarh.php",
		facAlt:"NEUROLOGY"
	},
	{
		facUrl:"face-sur.png",
		facContent:"Expert reconstruction for patients with congenital",
		facLink:"burn-plastic-surgery-hospital-bilaspur-chhattishgarh.php",
		facAlt:"BURN & PASTIC SURGERY"
	},
	{
		facUrl:"lungs.png",
		facContent:"Comprehensive screening, diagnosis, and treatment of",
		facLink:"chest-tb-hospital-bilaspur-chhattishgarh.php",
		facAlt:"CHEST & TB"
	},
	{
		facUrl:"skin.png",
		facContent:"Comprehensive care for skin conditions such as acne, eczema,",
		facLink:"skin-hospital-bilaspur-chhattishgarh.php",
		facAlt:"SKIN"
	},
	{
		facUrl:"dental.png",
		facContent:"Routine check-ups, cleanings, and fluoride treatments to prevent",
		facLink:"dental-hospital-bilaspur-chhattishgarh.php",
		facAlt:"DENTAL"
	}
];

var facCard=facility.forEach(function(item,index){
    var innerCard=document.querySelector('#in-sec-3');
    innerCard.innerHTML+=`
        <div class="sec-3-card" data-aos="fade-up">
			<div class="sec-3-img-div">
				<img src="img/index-art/${item.facUrl}" alt="${item.facAlt}">
			</div>
			<h4>${item.facAlt}</h4>
			<p>${item.facContent}</p>
			<p class="m-0 sec-3-btn"><a href="${item.facLink}">Read More</a></p>
		</div>
    `;
});
var h4=document.querySelectorAll(".sec-3-card>h4");

/*******************SUPER-SPECIALITY-array-object************************/
var superArr=[
	{
		superImg:"ped01.webp",
		superCap:"Pediatric Neurology"
	},
	{
		superImg:"ped02.webp",
		superCap:"Pediatric Endocrinology"
	},
	{
		superImg:"ped03.webp",
		superCap:"Pediatric Cardiology & Echocardiography"
	},
	{
		superImg:"ped04.webp",
		superCap:"Pediatric Orthopaedic"
	},
	{
		superImg:"ped05.webp",
		superCap:"Developmental Pediatrics & Autism clinic"
	},
	{
		superImg:"ped06.webp",
		superCap:"Asthma & Allergy Clinic"
	},
	{
		superImg:"ped07.webp",
		superCap:"Nutrition , Growth & Obesity Clinic"
	},
	{
		superImg:"ped08.webp",
		superCap:"Pediatric Occupational Therapy"
	}
];

var sec6=superArr.forEach(function(item,index){
	var secCard=document.querySelector(".inner-sec-6");
	secCard.innerHTML+=`
		<figure data-aos="fade-up">
			<div>
				<img src="img/super-secial/${item.superImg}" alt="dummy-${item.superImg}">
			</div>
			<figcaption><h4 clas="text-center">${item.superCap}</h4></figcaption>
		</figure>
	`;
});


/****************************doctor-carousel-js*************************/
var docArr=[
    {
        docUrl:"shrikant_giri.jpeg",
        docName:"Dr. Shrikant Giri",
        docQua:"MD fellowship Critical Care,Director"
    },
    {
        docUrl:"md02.webp",
        docName:"Dr. Pallavi S Giri",
        docQua:"MD Pediatrician and Incharge Developmental & Autism Clinic"
    },
    {
        docUrl:"picu01.webp",
        docName:"Dr. Pranav Andhare",
        docQua:"MBBS,DCH"
    },
    {
        docUrl:"picu03.webp",
        docName:"Dr. Manoj Chandrakar",
        docQua:"MBBS,MD Pediatrician, intensivist"
    },
    {
        docUrl:"med01.webp",
        docName:"Dr. H K Shukla",
        docQua:"Physician MD"
    },
	{
		docUrl:"abhimanyu.jpeg",
		docName:"Dr. Abhimanyu Pathak",
        docQua:"MBBS,MD(Pediatrics)"
	},
    {
        docUrl:"neon01.webp",
        docName:"Dr. Ravi Dwivedi",
        docQua:"MBBS,DCH"
    },
    {
        docUrl:"neon02.webp",
        docName:"Dr. Nirmal Pradhan",
        docQua:"MBBS,MD Pediatrics DNB Neonatology"
    },
    {
        docUrl:"neon03.webp",
        docName:"Dr. A Memon",
        docQua:"DNB Pediatrics Fellowship Neonatology"
    },
    {
        docUrl:"neonsur01.webp",
        docName:"Dr. Anurag Kumar",
        docQua:"MS Mch Pediatric Surgery"
    },
    {
        docUrl:"neonsur02.webp",
        docName:"Dr. O P Makhija",
        docQua:"MS MCH Pediatric Surgery"
    },
    {
        docUrl:"neuro01.webp",
        docName:"Dr Abhishek Saha",
        docQua:"neuro surgeon"
    }
];

var docCarousel=docArr.forEach(function(item, index){
    carousel_slider.innerHTML+=`
        <div class="card slide">
            <figure>
                <img src="img/doctor/${item.docUrl}" alt="${item.docName}-img">

                <figcaption>
                    <h3>${item.docName}</h3>
                    <p class="m-0">${item.docQua}</p>
                </figcaption>
            </figure>
        </div>
    `;
});

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
