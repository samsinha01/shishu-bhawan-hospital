/**********************************NICU GALLERY JS************************************/
var gelPicu=[
    {
        galUrl:"picu1.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu2.jpeg",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu3.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu4.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu5.webp",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu6.jpeg",
        galAlt:"gallery-img"
    },
    {
        galUrl:"picu7.jpeg",
        galAlt:"gallery-img"
    }

];

gelPicu.forEach(function(item, index){
    var gelPicuParent=document.querySelector(".inner-sec-2-picu");
    gelPicuParent.innerHTML+=`
        <div class="gelImg">
            <a href="img/gallery/${item.galUrl}" target="_blank">
                <img src=img/gallery/${item.galUrl} alt=${item.galAlt}>
            </a>
        </div>
    `;
});