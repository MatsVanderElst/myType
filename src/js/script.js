


const handleSubmitOrderForm = (e) => {
    const $form = e.currentTarget;
    //always prevent submitting the form to avoid page reload
    e.preventDefault();
    //validate the user input (they are never to be trusted!!!)
    if ($form.checkValidity()) {
        //the form is valid, submit to the server
        submitOrder();
    } else {
        //the form is invalid, not trusting the user was obviously the right choice :))
        const inputs = document.querySelectorAll(`.input`);
        inputs.forEach($input => showValidationInfo($input));
    }
};

const submitOrder = async () => {
    let name = document.querySelector(".nameInput").value;
    let address = document.querySelector(".addressInput").value;
    let postalCode = document.querySelector(".postalCodeInput").value;
    let city = document.querySelector(".cityInput").value;
    let country = document.querySelector(".countryInput").value;
    console.log(`Submit the order`);
    const response = await fetch(`http://localhost/my-type/src/index.php?page=order&name=${name}&address=${address}&postalCode=${postalCode}&city=${city}&country=${country}`);
    /* const response = await fetch(`http://devine-matsvanderelst.be/09-fetchalytics/index.php?page=barchartdata&type=${type}&year=${year}`); */
    console.log(response);
    
    //show user that order was succesfully submitted 
    let confirmation = `thanks ${name}, your order has been submitted!
    The package will arrive at: ${address},${postalCode},${city},${country}`;

    const formDiv = document.querySelector('.clarendonQuestStepOne__form');
    const confirmationDiv = document.querySelector('.clarendonQuestStepOne__confirmationMessage');
    
    formDiv.classList.add("hide");
    confirmationDiv.classList.add("formdiv");
    confirmationDiv.innerHTML = confirmation;

}

export const init = () => {
    console.log('start executing JavaSript');

    const $orderForm = document.querySelector(`.clarendonQuestStepOne__form`);
    $orderForm.noValidate = true;
    $orderForm.addEventListener(`submit`, handleSubmitOrderForm);
};
