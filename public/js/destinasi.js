// alert('test')

const dict_langkah = ['kedua', 'ketiga', 'keempat', 'kelima', 'keenam', 'ketujuh', 'kedelapan']

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
  for (let i = 0; i < countPinpoint-1; i++){
    const step = document.getElementsByClassName("Langkah "+dict_langkah[i])
    for (let j = 0; j < step.length ; j++){
      if(i <= index-1){
        step[j].classList.remove('hidden')
        step[j].classList.add('flex')
      } else {
        step[j].classList.remove('flex')
        step[j].classList.add('hidden')
      }
    }
  }
}

function PencetPilih(target,countstep){
  console.log("target : ", target)
  console.log("banyak step :", countstep)
  for (let i = 0; i < countstep-1 ; i++){
    console.log(document.getElementsByClassName("Langkah "+dict_langkah[i]))
  }
  // step2 = document.getElementsByClassName("Langkah kedua");
  // for (const step2 of )
}