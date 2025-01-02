const box = document.getElementById('cercle');
const box2 = document.getElementById('cercle_deux');
const box3 = document.getElementById('cercle_three');
const box4 = document.getElementById('cercle_four'); 

document.getElementById('menu_center_bas').addEventListener('mouseover', () => {
    box.style.display = 'block';
    box2.style.display = 'block'; 
    box3.style.display = 'block';
    box4.style.display = 'block'; 
    setTimeout(() => box.classList.add('show'), 10); 
    setTimeout(() => box2.classList.add('show'), 10); 
    setTimeout(() => box3.classList.add('show'), 10); 
    setTimeout(() => box4.classList.add('show'), 10); 
});
document.getElementById('menu_center_bas').addEventListener('mouseout', () => {
    box.style.display = 'none';
    box2.style.display = 'none';
    box3.style.display = 'none'; 
    box4.style.display = 'none'; 
    setTimeout(() => box.classList.remove('show'), 10);
    setTimeout(() => box2.classList.remove('show'), 10); 
    setTimeout(() => box3.classList.remove('show'), 10); 
    setTimeout(() => box4.classList.remove('show'), 10); 
});

function openZoom(){
    document.getElementById('modal').style.transition = 'all 0.2s';
    document.getElementById('modal').style.display = 'block';
    document.getElementById('modal').style.zIndex = '1.0';
    document.getElementById('modal').classList.add("animate__animated", "animate__fadeIn");
}

function closeZoom(){
    document.getElementById('modal').style.transition = 'all 0.2s'
    document.getElementById('modal').style.display = 'none';
} 

document.getElementById('menu_center_mobile').addEventListener('click', () => {
    const elements = document.querySelectorAll('.display_nav_menu'); 
    if(document.getElementById('menu_center_mobile').style.width === '80%'){
        document.getElementById('menu_center_mobile').style.width = "180px";
        document.getElementById('menu_center_mobile').style.opacity = "0.6";
        document.getElementById('menu_center_mobile').style.backgroundImage = "url('/app/img/fleche.png')";
        elements.forEach(element => {
            element.style.display = 'none'
        });
    }else{
        document.getElementById('menu_center_mobile').style.width = "80%"
        document.getElementById('menu_center_mobile').style.backgroundImage = "url('/app/img/background.png')";
        document.getElementById('menu_center_mobile').style.opacity = "1"; 

        // Parcourt tous les éléments et applique display: block
        elements.forEach(element => {
        element.style.display = 'block';
        });
    }
     
}); 
 