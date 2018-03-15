import React from "react"
import {Link} from 'react-router-dom'
import Api from '../api'

class PostList extends React.Component {

  constructor() {
    super()
    this.state = {
      posts: []
    }
  }

  componentDidMount() {
    let api = new Api()

    api.posts().then(data => {
      //console.log(data);
       this.setState({
         posts: data
       })
     })
    }
    render(){
        let posts = this.state.posts.map((post, index) => 
            <h3 key={index}>
                <Link to={`/post/${post.id}`}>{post.title.rendered} <small>{post._embedded.author[0].name}</small></Link>
            </h3>)          
        return (
            <div>{posts}</div>
        )
    }
}

export default PostList