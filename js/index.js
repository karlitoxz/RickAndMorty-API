console.log('index.js');

const caracter = 1;
const API = 'https://rickandmortyapi.com/api/character/'+caracter;

console.log(API);

const fetchData = (url_api) => {
  return new Promise((resolve, reject) => {
    const xhttp = new XMLHttpRequest();
    xhttp.open('GET', url_api, true);
    xhttp.onreadystatechange = (() => {
      if (xhttp.readyState === 4) {
        (xhttp.status === 200)
          ? resolve(JSON.parse(xhttp.responseText))
          : reject(new Error('Error', url_api))
      }
    })
    xhttp.send();
  })
}

console.time('fetchData')
fetchData(API)
  .then(data => {
  	console.log(data);
  	$('#name').empty().append(data.name);
  	$('#image').attr('src', data.image);
  	$('#id').empty().append(data.id);
  	$('#gender').empty().append(data.gender);
  	$('#species').empty().append(data.species);
  	$('#status').empty().append(data.status);
  	data.episode.forEach(element => $('#episode').append(element).append('<br>'));
  	$('#url').empty().append(data.url);
  })
  .catch(err => console.log(err))
  .finally(() => {
    console.timeEnd('fetchData')
  })