let formContainer = document.getElementById("dynamic-forms-container");
			let formOptions = {
				chargesUrl: "http://localhost:8000/charges.php",
				merchantTransactionId: "123456",
                events_url: "https://web.fe.up.pt/~up201806140/switcheroos/events.php"
			};
			let switchJs = new SwitchJs(SwitchJs.environments.TEST, "AY1NAHUkocpVMIag9i8xfOlDPBEjVUJMuwgmsEQHFzApwS2tmwhAousPm4XC0tl");
			switchJs.dynamicForms(formContainer, formOptions);
	