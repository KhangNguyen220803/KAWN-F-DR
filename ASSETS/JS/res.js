// từ form đăng ký(RES) bấm login ----> chuyển tab Login

// const ContainRes = document.querySelector(".container-res")
// const Res = document.getElementById("next-login")
// const ContainLogin = document.querySelector(".container-login")

// Res.addEventListener("click", e => {
//     (
//         ContainRes.classList.add("display"),
//         ContainLogin.classList.remove("display")
//     )
// })



// từ form login bấm change password----> chuyển tab change password

// const ContainChange = document.querySelector(".container-change")
// const Change = document.getElementById("next-change")

// Change.addEventListener("click", e => {
//     (

//         ContainLogin.classList.add("display"),

//         ContainChange.classList.remove("display")

//     )
// })





// từ form change password bấm login---->chuyển về login

// const ChangeToLogin = document.getElementById("next-login-after-save")

// ChangeToLogin.addEventListener("click", e => {
//     (



//         ContainChange.classList.add("display"),
//         ContainLogin.classList.remove("display")

//     )
// })




//từ form login bấm forgot pass-----> chuyển đến from forgot

// const Forgot = document.getElementById("next-forgot")
// const ContainForgot = document.querySelector(".container-forgot")

// Forgot.addEventListener("click", e => {
//     (
//         ContainLogin.classList.add("display"),
//         ContainForgot.classList.remove("display")

//     )
// })




// từ form forgot bấm login-------> chuyển về from login


// const ForgotToLogin = document.getElementById("next-login-after-send")

// ForgotToLogin.addEventListener("click", e => {
//     (



//         ContainForgot.classList.add("display"),
//         ContainLogin.classList.remove("display")

//     )
// })



// -----------------------------------------------
// Show pass res-----------------------------------------
let showPass = document.querySelector(".show-pass")
let pass = document.querySelector(".pass")

showPass.onclick = function(){
        if (pass.type == "password") {
            pass.type = "text"
            showPass.classList.remove("fa-eye")
            showPass.classList.add("fa-eye-slash")
        }
        else{
            pass.type = "password"
            showPass.classList.add("fa-eye")
            showPass.classList.remove("fa-eye-slash")
        }
}

// Show cpass res------------------------------------------------

let showCpass = document.querySelector(".show-cpass")
let cpass = document.querySelector(".cpass")

showCpass.onclick = function(){
        if (cpass.type == "password") {
            cpass.type = "text"
            showCpass.classList.remove("fa-eye")
            showCpass.classList.add("fa-eye-slash")
        }
        else{
            cpass.type = "password"
            showCpass.classList.add("fa-eye")
            showCpass.classList.remove("fa-eye-slash")
        }
}

// Show pass log-----------------------------------------
// let showPassLog = document.querySelector(".show-lpass")
// let logPass = document.querySelector(".l-pass")

// showPassLog.onclick = function(){
//         if (logPass.type == "password") {
//             logPass.type = "text"
//             showPassLog.classList.remove("fa-eye")
//             showPassLog.classList.add("fa-eye-slash")
//         }
//         else{
//             logPass.type = "password"
//             showPassLog.classList.add("fa-eye")
//             showPassLog.classList.remove("fa-eye-slash")
//         }
// }


// Show pass change old-----------------------------------------
// let showPassOld = document.querySelector(".show-passOld")
// let OldPass = document.querySelector(".pass-old")

// showPassOld.onclick = function(){
//         if (OldPass.type == "password") {
//             OldPass.type = "text"
//             showPassOld.classList.remove("fa-eye")
//             showPassOld.classList.add("fa-eye-slash")
//         }
//         else{
//             OldPass.type = "password"
//             showPassOld.classList.add("fa-eye")
//             showPassOld.classList.remove("fa-eye-slash")
//         }
// }

// Show pass change new-----------------------------------------
// let showPassNew = document.querySelector(".show-passNew")
// let NewPass = document.querySelector(".pass-new")

// showPassNew.onclick = function(){
//         if (NewPass.type == "password") {
//             NewPass.type = "text"
//             showPassNew.classList.remove("fa-eye")
//             showPassNew.classList.add("fa-eye-slash")
//         }
//         else{
//             NewPass.type = "password"
//             showPassNew.classList.add("fa-eye")
//             showPassNew.classList.remove("fa-eye-slash")
//         }
// }


