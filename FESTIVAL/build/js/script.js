function navegacionFija(){const e=document.querySelector(".header"),t=document.querySelector(".contenido-festival");window.addEventListener("scroll",(function(){t.getBoundingClientRect().bottom<1?e.classList.add("fixed"):e.classList.remove("fixed")}))}function crearGaleria(){const e=document.querySelector(".galeria-imagenes");for(let t=1;t<=16;t++){const n=document.createElement("PICTURE");n.innerHTML=`\n    <source srcset="build/img/gallery/thumb/${t}.avif" type="image/avif">\n    <source srcset="build/img/gallery/thumb/${t}.webp" type="image/webp">\n    <img loading="lazy" width="200" height="300" src="build/img/gallery/thumb/${t}.jpg" alt="imagen galeria">\n`,e.appendChild(n),n.onclick=function(){mostrarimagen(t)}}}function mostrarimagen(e){const t=document.createElement("PICTURE");t.innerHTML=`\n<source srcset="build/img/gallery/full/${e}.avif" type="image/avif">\n<source srcset="build/img/gallery/full/${e}.webp" type="image/webp">\n<img loading="lazy" width="200" height="300" src="build/img/gallery/full/${e}.jpg" alt="imagen galeria">\n`;const n=document.createElement("BUTTON");n.textContent="X",n.classList.add("btn-cerrar"),n.onclick=cerraModal;const a=document.createElement("DIV");a.classList.add("modal"),a.onclick=cerraModal,a.appendChild(t),a.appendChild(n);const c=document.querySelector("body");c.appendChild(a),c.classList.add("overflow-hidden")}function cerraModal(){const e=document.querySelector(".modal");e.classList.add("fade-out"),setInterval((()=>{e?.remove();document.querySelector("body").classList.remove("overflow-hidden")}),300)}function resaltarEnlace(){document.addEventListener("scroll",(function(){const e=document.querySelectorAll("section"),t=document.querySelectorAll(".navegacion-principal a");let n=" ";e.forEach((e=>{const t=e.offsetTop,a=e.clientHeight;window.scrollY>=t-a/3&&(n=e.id)})),t.forEach((e=>{e.getAttribute("href")==="#"+n?e.classList.add("active"):e.classList.remove("active")}))}))}function scrollnav(){document.querySelectorAll(".navegacion-principal a").forEach((e=>{e.addEventListener("click",(e=>{e.preventDefault();const t=e.target.getAttribute("href");document.querySelector(t).scrollIntoView({behavior:"smooth"})}))}))}document.addEventListener("DOMContentLoaded",(function(){crearGaleria(),navegacionFija(),resaltarEnlace(),scrollnav()}));