let arrayOfSteps = [
  {
    stepNumber: 1,
    stepTitle: "Admission",
    isCompleted: false,
  },
  {
    stepNumber: 2,
    stepTitle: "Funding",
    isCompleted: false,
  },
  {
    stepNumber: 3,
    stepTitle: "The other one",
    isCompleted: false,
  },
  {
    stepNumber: 4,
    stepTitle: "Document",
    isCompleted: false,
  },
];


const stepsContainer = document.getElementById("stepsContainer");
document.addEventListener("DOMContentLoaded", () => {
  
  arrayOfSteps.forEach((e) => {
    let stepContainer = document.createElement("div");
    stepContainer.classList.add("step-counter-container");

    let step = document.createElement("div");
    step.classList.add("step-counter");
    step.innerHTML = e.stepNumber;

    let title = document.createElement("p");
    title.classList.add("step-counter-title");
    title.innerHTML = e.stepTitle;

    stepContainer.appendChild(step);
    stepContainer.appendChild(title);
    stepsContainer.appendChild(stepContainer)
    console.log(stepContainer,step,title)
  });
});

var currentStep = 1;
showStep(currentStep);


function showStep(stepNumber) {
  var steps = document.getElementsByClassName("step");
  for (var i = 0; i < steps.length; i++) {
    steps[i].style.display = "none";
  } 
  steps[stepNumber - 1].style.display = "block";

  var stepCounters = document.getElementsByClassName("step-counter");
  for (var i = 0; i < stepCounters.length; i++) {
    stepCounters[i].classList.remove("complete");
  }
  for (var i = 0; i < stepNumber; i++) {
    stepCounters[i].classList.add("complete");
  }
}

function nextStep(stepNumber) {
  if (validateStep(stepNumber)) {
    currentStep += 1;
    showStep(currentStep); 
  }
}

function previousStep(stepNumber) {
  currentStep -= 1;
  showStep(currentStep);
}

function validateStep(stepNumber) {
  // Perform validation logic here
  // Return true if the step is valid, otherwise false
  return true;
}
