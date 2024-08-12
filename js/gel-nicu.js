/**********************************NICU GALLERY JS************************************/
var gelNicu=[
    {
        galUrl:"nicu1.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu2.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu3.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu4.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu5.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu6.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu7.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu8.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"nicu9.webp",
        galAlt:"gallery-img"
    }

];

gelNicu.forEach(function(item, index){
    var gelNicuParent=document.querySelector(".inner-sec-2-nicu");
    gelNicuParent.innerHTML+=`
        <div class="gelImg">
            <a href="img/gallery/${item.galUrl}" target="_blank">
                <img src=img/gallery/${item.galUrl} alt=${item.galAlt}>
            </a>
        </div>
    `;
});