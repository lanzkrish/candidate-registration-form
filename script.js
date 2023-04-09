
const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");
const form = document.querySelector("form");


//for countries
document.addEventListener('DOMContentLoaded',() =>{

    //  const selectDrop =document.querySelector('#countries');
      const selectDrop = document.getElementById('countries');
  
      fetch('https://restcountries.com/v3.1/all').then(res => {
          return res.json();
      }) .then(data => {
          let output ="";
          
          data.forEach(country => {
              output += `<option value="${country.name.common}">${country.name.common}</option>`
              //console.log(country.name.common);
          })
  
          selectDrop.innerHTML = output;
      }) .catch(err => {
          console.log.err;
      })
  
  });


nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});
prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const inputs = [];
  form.querySelectorAll("input").forEach((input) => {
    const { name, value } = input;
    inputs.push({ name, value });
    
  });
  form.querySelectorAll("select").forEach((input) => {
    const { name, value } = input;
    inputs.push({ name, value });
    
  });
  

 
 
  console.log(inputs);
  form.reset();
});

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active");
  index = steps.indexOf(active);
  steps[index].classList.remove("active");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active");
}




