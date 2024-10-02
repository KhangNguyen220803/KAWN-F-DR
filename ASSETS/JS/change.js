// Show pass change old-----------------------------------------
let showPassOld = document.querySelector(".show-passOld")
let OldPass = document.querySelector(".pass-old")

showPassOld.onclick = function(){
        if (OldPass.type == "password") {
            OldPass.type = "text"
            showPassOld.classList.remove("fa-eye")
            showPassOld.classList.add("fa-eye-slash")
        }
        else{
            OldPass.type = "password"
            showPassOld.classList.add("fa-eye")
            showPassOld.classList.remove("fa-eye-slash")
        }
}

// Show pass change new-----------------------------------------
let showPassNew = document.querySelector(".show-passNew")
let NewPass = document.querySelector(".pass-new")

showPassNew.onclick = function(){
        if (NewPass.type == "password") {
            NewPass.type = "text"
            showPassNew.classList.remove("fa-eye")
            showPassNew.classList.add("fa-eye-slash")
        }
        else{
            NewPass.type = "password"
            showPassNew.classList.add("fa-eye")
            showPassNew.classList.remove("fa-eye-slash")
        }
}

