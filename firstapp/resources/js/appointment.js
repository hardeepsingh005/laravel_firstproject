// make appointment

 document.getElementById("appointmentForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let form = this;
    let formData = new FormData();

    formData.append("fname", form.fname.value);
    formData.append("lname", form.lname.value);
    formData.append("email", form.email.value);
    formData.append("phone", form.phone.value);
    formData.append("services", form.services.value);
    formData.append("date", form.date.value);

    fetch("/addaapoint", {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
        },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("msgSubmit").innerHTML = "Saved Successfully!";
        form.reset();
    })
    .catch(err => console.error(err));
});