const bifrost = new Bifrost(
    (bifrost) => {
    },
    (bifrost) => {
        bifrost.replaceTextInElement("body", bifrost.config);

        bifrost.form("form", () => {
            alert().success("Form submitted successfully!");
            return true;
        }, async (response) => {
            alert().success("Response received from server: " + JSON.stringify(await response.json()));
        });
    }
);
