const publisherInput = document.querySelector('input[name="publisher"]')
const publisherInputText = document.querySelector('.input-options .publisher-text')
const publisherOptionCover = document.querySelector('#publisher-options');
let publisherOptions = document.querySelectorAll('#publisher-options .option');

const authorInput = document.querySelector('input[name="author"]')
const authorInputText = document.querySelector('.input-options .author-text')
const authorOptionCover = document.querySelector('#author-options');
let authorOptions = document.querySelectorAll('#author-options .option');


const genreInput = document.querySelector('input[name="genre"]')
const genreInputText = document.querySelector('.input-options .genre-text')
const genreOptionCover = document.querySelector('#genre-options');
let genreOptions = document.querySelectorAll('#genre-options .option');

const handleInputOptions = (cover, input, inputText, options, coverId) => {
  const data = []
  
  options.forEach(item => data.push({
    id: item.id,
    data: item.innerHTML.toLowerCase()
  }))
  
  inputText.addEventListener('input', e => {
    cover.style.display = 'none'
  
    const inputData = e.target.value.toLowerCase();
  
    let arr = []
    let html = ''
  
    if(inputData) {
      data.forEach(item => {
        if(item.data.includes(inputData)) arr.push(item)
      })
  
      if(arr) {
        arr.forEach(item => {
          html += `<div class="option" id="${item.id}">${item.data}</div>`
        })
      }
    }
  
    cover.innerHTML = html;

    options = document.querySelectorAll(`#${coverId} .option`);
    
    cover.style.display = 'block'
  
    options.forEach(option => {
      option.addEventListener('click', () => {
        input.value = option.id
        inputText.value = option.innerHTML
        cover.style.display = 'none'
      })
    })
  
  })
}


handleInputOptions(publisherOptionCover, publisherInput, publisherInputText, publisherOptions, 'publisher-options')
handleInputOptions(authorOptionCover, authorInput, authorInputText, authorOptions, 'author-options')
handleInputOptions(genreOptionCover, genreInput, genreInputText, genreOptions, 'genre-options')
