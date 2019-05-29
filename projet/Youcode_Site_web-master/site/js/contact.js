var NameInput = React.createClass({
    displayName: "NameInput",
    handleTextChange: function () {
        var x = this.refs.nameField.getDOMNode().value;

        if (x != '') {
            this.refs.nameField.getDOMNode().className = 'active';
        } else {
            this.refs.nameField.getDOMNode().className = '';
        }

        this.props.onUserInput(x);
    },
    render: function () {
        return (
            React.createElement("div", {
                    className: "control"
                },
                React.createElement("input", {
                    type: "text",
                    id: "name",
                    ref: "nameField",
                    placeholder: "Entrer votre nom",
                    autoFocus: true,
                    required: true,
                    onChange: this.handleTextChange
                }),
                React.createElement("label", {
                    for: "name"
                }, "Nom")
            )
        )
    }
});

var EmailInput = React.createClass({
    displayName: "EmailInput",
    handleTextChange: function () {
        var x = this.refs.emailField.getDOMNode().value;

        if (x != '') {
            this.refs.emailField.getDOMNode().className = 'active';
        } else {
            this.refs.emailField.getDOMNode().className = '';
        }

        this.props.onUserInput('', x);
    },
    render: function () {
        return (
            React.createElement("div", {
                    className: "control"
                },
                React.createElement("input", {
                    type: "email",
                    id: "email",
                    ref: "emailField",
                    placeholder: "Entrer votre E-mail",
                    required: true,
                    onChange: this.handleTextChange
                }),
                React.createElement("label", {
                    for: "email"
                }, "E-mail")
            )
        )
    }
});

var MessageArea = React.createClass({
    displayName: "MessageArea",
    handleTextChange: function () {
        var x = this.refs.messageBox.getDOMNode().value;

        if (x != '') {
            this.refs.messageBox.getDOMNode().className = 'active';
        } else {
            this.refs.messageBox.getDOMNode().className = '';
        }

        this.props.onUserInput('', '', x);
    },
    render: function () {
        return (
            React.createElement("div", {
                    className: "control"
                },
                React.createElement("textarea", {
                    id: "message",
                    ref: "messageBox",
                    placeholder: "Votre message",
                    required: true,
                    onChange: this.handleTextChange
                }),
                React.createElement("label", {
                    for: "message"
                }, "Message")
            )
        )
    }
});

var ContactForm = React.createClass({
    displayName: "ContactForm",
    getInitialState: function () {
        return {
            nameText: '',
            emailText: '',
            messageText: ''
        };
    },
    handleUserInput: function (nameText, emailText, messageText) {
        this.setState({
            nameText: nameText,
            emailText: emailText,
            messageText: messageText
        });
    },
    render: function () {
        return (
            React.createElement("form", {
                    action: "/"
                },

                React.createElement("fieldset", null,
                    React.createElement("legend", null, "Contactez Nous"),

                    React.createElement(NameInput, {
                        onUserInput: this.handleUserInput
                    }),
                    React.createElement(EmailInput, {
                        onUserInput: this.handleUserInput
                    }),
                    React.createElement(MessageArea, {
                        onUserInput: this.handleUserInput
                    }),

                    React.createElement("input", {
                        type: "submit",
                        value: "Envoyer"
                    })
                )

            )
        );
    }
});

React.render(React.createElement(ContactForm, null), document.getElementById('stage'));