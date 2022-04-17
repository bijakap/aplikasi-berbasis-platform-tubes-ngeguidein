// alert('test')

const dict_langkah = ['kedua', 'ketiga', 'keempat', 'kelima', 'keenam', 'ketujuh', 'kedelapan']
const step = document.getElementsByClassName("step")
step[0].classList.remove("hidden")
step[0].classList.add('flex')

const inputan = document.getElementsByClassName("inputan")

for (let i = 0; i < inputan.length; i++) {
  inputan[i].addEventListener('click', () => {
      removeClass()
      inputan[i].classList.add("bg-gray-700", "text-white", "active");
      if (inputan[i].classList.contains('active')){
        displayPinpoint(i, inputan.length)
      }
    });
  }


function removeClass(){
    for (const input of inputan){
        if (input.classList.contains('active')){
            input.classList.remove("bg-gray-700", "text-white", "active");
        }
    }
}

function displayPinpoint(index, countPinpoint){
  console.log(index)
  const step = document.getElementsByClassName("step")
  for (let i = 0; i < step.length; i++){
    if (i == index){
      step[i].classList.remove('hidden');
      step[i].classList.add('flex');
    }
    else if(step[i].classList.contains('flex')){
      step[i].classList.remove('flex');
      step[i].classList.add('hidden')
    }
  }
}