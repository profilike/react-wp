import React from "react"
import Api from '../api'
import {Link} from 'react-router-dom'
import {LoginLink} from '../auth'

class SiteNav extends React.Component {

  constructor() {
    super()
    this.state = {
      data: []
    }
  }

  componentDidMount() {
    let api = new Api()

    api.categories().then(data => {
       this.setState({
         data: data
       })
     })
  }

    render() {
      let items = this.state.data.map((item, index) => {
        return (<li key={index}>
                  <Link to={`/category/${item.id}`}>{item.name}</Link>
                </li>)
      })
        return(
            <nav className="navbar navbar-default">
            <div className="container-fluid">
              <div className="navbar-header">
                <Link className="navbar-brand" to="/">Headless Wordpress</Link>
              </div>
          
              <div className="collapse navbar-collapse" id="navbar">
                <ul className="nav navbar-nav">
                  <li className="active"><a href="/">Home</a></li>
                  <li className="dropdown">
                    <a href="#" className="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      Categories 
                      <span className="caret"></span>
                    </a>
                    <ul className="dropdown-menu">
                      {items}
                    </ul>
                  </li>
                  <LoginLink />
                </ul>
              
              </div>
            </div>
          </nav>
        )
    }

}

export default SiteNav