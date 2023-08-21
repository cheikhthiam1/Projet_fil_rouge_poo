import { Api }   from "../../../core/api.js";
import { WEB_URL }   from "./..core/bootrap.js";
window.addEventListener("load" ,async function (){
await   Api.getData(`${WEB_URL}/articleconfection`).then(function(data){
console.log(response.data);
tbody.innerHTML="";
for(let artconf of data) {
    tbody.innerHTML += `
    `
}
});
});