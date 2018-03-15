import React from 'react'
import {auth} from '../auth'
import { Redirect } from 'react-router-dom'
import Api from '../api'
import {store} from '../auth'

class DeletePostLink extends React.Component {

    constructor(props) {
        super(props)
        this.state = {
            redirectTo: false
        }
        this.deletePost = this.deletePost.bind(this)
    }
    
    deletePost() {
        let api = new Api()
        api.deletePost(store(), this.props.id).then(
            setTimeout(() =>{
                this.setState({redirectTo: true})
            },1000)     
        )
    }
    render(){
        if(this.state.redirectTo){
            return <Redirect to="/" />
        }
    
        if(auth.isAuthenticated){
            return (
                <button className="btn btn-danger" onClick={this.deletePost}>Delete Post</button>
            )
        } 
        return null;
    }
}
export default DeletePostLink

