$("#btnLogin").click((e) => {
  e.preventDefault();
  login();
});

$('input[name="user_password"]').keyup((e) => {
  if (e.keyCode == 13) {
    login();
  }
});

async function login() {
  let obj = new FormData();
  let input_data = $("#loginForm").serializeArray();
  
  $.each(input_data, function (key, input) {
    obj.append(input.name, input.value);
  });

  fetch(url + "funciones_login.php?action=login", { method: "POST", body: obj })
    .then((response) => {
      return response.json();
    })
    .then((result) => {
      //window.location.href=result.url;
      console.log(result.jwt);
    })
    .catch((error) => {
      console.log("Request failed", error);
    });
}
