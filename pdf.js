window.onload=function(){
  document.getElementById("download")
  .addEventListener("click",()=>{
   const resume1 =this.document.getElementById("resume1");
   console.log(resume1);
   console.log(window);
   var opt = {
      margin:      [-0.45,0,0,0],
      filename:     'Resume.pdf',
      image:        { type: 'jpeg', quality: 0.98 },
      html2canvas:  { scale: 2 },
      jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    
   html2pdf().from(resume1).set(opt).save();
  })
}
