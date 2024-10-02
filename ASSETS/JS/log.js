// Show pass log-----------------------------------------
let showPassLog = document.querySelector(".show-lpass")
let logPass = document.querySelector(".l-pass")

showPassLog.onclick = function(){
        if (logPass.type == "password") {
            logPass.type = "text"
            showPassLog.classList.remove("fa-eye")
            showPassLog.classList.add("fa-eye-slash")
        }
        else{
            logPass.type = "password"
            showPassLog.classList.add("fa-eye")
            showPassLog.classList.remove("fa-eye-slash")
        }
}

