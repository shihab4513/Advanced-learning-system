function makePurple(element) {
    const x= document.getElementById='element';
    x.style.backgroundColor='pink';
    
     
 }
 function removeHidden(){
     
 }
 document.getElementById('designButton').addEventListener('click', function () {
     const button = document.getElementById('designButton');
     const dSec=document.getElementById('design');
     dSec.classList.remove('hidden');
   
     const devSec=document.getElementById('development');
     const bsSec=document.getElementById('buisness');
     const dataSec=document.getElementById('Data-Science'); 
     if(!devSec.classList.contains('hidden'))
     {
        devSec.classList.add('hidden');
     }
     else if(!bsSec.classList.contains('hidden'))
     {
         bsSec.classList.add('hidden');
     }
     else if(!dataSec.classList.contains('hidden'))
     {
         dataSec.classList.add('hidden');
     }
   
    const y=document.getElementById('allFooter');
    y.classList.remove('hidden');
    
     
 
 });
 document.getElementById('developmentButton').addEventListener('click', function () {
     const button = document.getElementById('developmentButton');
     const devSec=document.getElementById('development');
     devSec.classList.remove('hidden');
     
     
     const dSec=document.getElementById('design');
    
     
     
     const bsSec=document.getElementById('buisness');
     const dataSec=document.getElementById('Data-Science'); 
     if(!dSec.classList.contains('hidden'))
     {
        dSec.classList.add('hidden');
     }
     else if(!bsSec.classList.contains('hidden'))
     {
         bsSec.classList.add('hidden');
     }
     else if(!dataSec.classList.contains('hidden'))
     {
         dataSec.classList.add('hidden');
     }
     
 
 })
 // document.getElementById('designButton').addEventListener('click', function () {
 //     const button = document.getElementById('designButton');
     
 //     const dSec=document.getElementById('design');
 //     // dSec.classList.remove('hidden');
 //     dSec.classList.remove('hidden');
 //     const devSec=document.getElementById('development');
 //     const bsSec=document.getElementById('buisness');
 //     const dataSec=document.getElementById('Data-Science'); 
 //     if(!devSec.classList.contains('hidden'))
 //     {
 //        devSec.classList.add('hidden');
 //     }
 //     else if(!bsSec.classList.contains('hidden'))
 //     {
 //         bsSec.classList.add('hidden');
 //     }
 //     else if(!dataSec.classList.contains('hidden'))
 //     {
 //         dataSec.classList.add('hidden');
 //     }
 
 // })
 