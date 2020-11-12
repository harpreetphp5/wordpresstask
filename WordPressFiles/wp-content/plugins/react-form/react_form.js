class MyForm extends React.Component {
        constructor(props) {
        super(props);
        this.state = {
          myName: "",
          myPhone: "",
          errorPhone: "",
          errorName: "",
          finishset: "",
        }

        this.handleSubmit = this.handleSubmit.bind(this);
        this.processChange = this.processChange.bind(this);
      }

      processChange(event) {
        const target = event.target;
        this.setState({
          [target.name]: target.value
        });
      }

      handleSubmit(event) {
       
        this.setState({
            errorPhone: ""
        });
        this.setState({
            errorName: ""
        });
        this.setState({
            finishset: ""
        });
        const phoneno = /^([\+[0-9]{1,5})?([0-9]{10})$/;
        const namereg = /^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/;
          if(this.state.myName.length>20 || this.state.myName.length<3){
                this.setState({
                      errorName: "min 3 & max 20 characters are allowed"
                    });
                    event.preventDefault();
                        return false;
            }else{
                if(this.state.myName.match(namereg)){
                      this.setState({
                          errorName: ""
                        });
                      }else{
                      this.setState({
                          errorName: "invalid name is entered"
                        });
                        event.preventDefault();
                        return false;
                    }
            } 
          if(this.state.myPhone.length>12 || this.state.myPhone.length<10 ){
            this.setState({
                  errorPhone: "min 9 & max 12 digits are allowed"
                });
                event.preventDefault();
                        return false;
            
            }else{
                    if(this.state.myPhone.match(phoneno)){
                      this.setState({
                          errorPhone: ""
                        });
                      }else{
                      this.setState({
                          errorPhone: "invalid phone number"
                        });
                        event.preventDefault();
                        return false;
                    }
            }
            
        if(this.state.errorPhone=="" && this.state.errorName==""){
            this.setState({
                          finishset: "submitted successfully...!!"
            });
            fetch('https://birobit.com/challenge/WPSite/wp-content/plugins/react-form/api.php', {
              
              method: 'POST',
              // We convert the React state to JSON and send it as the POST body
              headers: new Headers({
                     'Content-Type': 'application/x-www-form-urlencoded',
              }),
              body: 'data='+JSON.stringify(this.state)
    
            }).then(function(response) {
              console.log(response)
              
              return response.json();
              
            });
        }

        event.preventDefault();
      }

        render() {
            return (

              <form onSubmit={this.handleSubmit}>
              <h2>Request a quote</h2>
              <p>
                <label>
                  COMPANY NAME:  
                </label>
                <div>
                    <input type="text" name="myName" value={this.state.myName} onChange={this.processChange} />
                    <span>{this.state.errorName}</span>
                </div>
                
              </p>
              <p>
                <label>
                  PHONE NUMBER:
                </label>
                <div>
                    <input type="text" name="myPhone" value={this.state.myPhone} onChange={this.processChange} />
                    <span>{this.state.errorPhone}</span>
                </div>
              </p>
              <p>
                <label>
                </label>
                <div>
                    The information collected will be used in accordance with our <a href="#">privacy policy</a>
                </div>
              </p>
              <p>
                <label>
                </label>
                <div>
                    <input type="submit" value="Request a quote" />
                    <h5>{this.state.finishset}</h5>
                </div>
              </p>
            </form>

            )
        }
    }
    ReactDOM.render(
        <MyForm />,
        document.getElementById('myform')
    );