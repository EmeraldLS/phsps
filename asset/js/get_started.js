var form = document.querySelector("form")
var myName = document.getElementById("name")
var textarea = document.querySelector("textarea");

textarea.addEventListener("keyup", function(){
  return textarea.value = textarea.value.toLowerCase()
})
const user__name = myName.addEventListener("keyup", function(){
    return myName.value = myName.value.toUpperCase();
})

form.addEventListener("submit", function(e){
    e.preventDefault();
    swal({
        title: user__name,
        text: "A representative will speak with you soon",
        icon: "success",
        button: "Aww yiss!",
      })
      .then(() => {
        $("form").trigger("reset")
      })
      nameArr = []
})
