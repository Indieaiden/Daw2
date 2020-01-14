function crearimagen(){
  var img = document.createElement("img");
  var body = document.getElementsByTagName("body")[0];
  body.appendChild(img);

  img.setAttribute("src","https://i0.wp.com/colaboratorio.net/wp-content/uploads/2017/02/jekyll-logo-dark-solid.jpg?fit=1021%2C580&ssl=1");
  img.setAttribute("width","300px");

}
function cerarform(){
  var form = document.createElement("form");
  var datos = document.createElement("input");
  var submit = document.createElement("input");
  var body = document.getElementsByTagName("body")[0];

  body.appendChild(form);
  form.setAttribute("method","post")
  form.setAttribute("action","#")

  form.appendChild(datos);
  datos.setAttribute("type","text");
  datos.setAttribute("placeholder","escribe algo...");
  form.appendChild(submit);
  submit.setAttribute("type","submit");
  submit.setAttribute("value","submit");
  submit.setAttribute("style","border-radius: 5px;");

}
function inicia(){
  crearimagen();
  cerarform();
}
