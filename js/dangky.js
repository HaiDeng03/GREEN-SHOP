function valForm() {
    p = event.target.children;
    if (p.email.value == "") {
        alert("Vui lòng nhập tên email");
        return false;
    }
    if (p.username.value == "") {
        alert("Vui lòng nhập tên đăng nhập");
        return false;
    }
    if (p.pass.value == "") {
        alert("Vui lòng nhập mật khẩu");
        return false;
    }
    if (p.passagain.value == "") {
        alert("Vui lòng nhập lại mật khẩu");
        return false;
    }
  
    return true;
}

let q = window.location.search;
let params = new URLSearchParams(q);
for (let p of params) {
    console.log(p);
    alert(p)
}
console.log(name);