function selectLocalImage(){

}
var quill = new Quill('#body', {
  modules: {
toolbar: {
container:[

  [{ header: [1, 2, 3, 4, false] }],
  ['bold', 'italic', 'underline'],
  ['link', 'image', 'blockquote', 'code-block'],
  [{list: 'ordered'}, {list: 'bullet'}],
],
handlers: {
  image: selectLocalImage,
},
},
},
placeholder: '',
theme: 'snow',
});