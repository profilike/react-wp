import React from 'react'
import Api from '../api'
import DeletePostLink from '../actions/DeletePostLink'

class Post extends React.Component {

    constructor() {
        super()
        this.state = {
          title: '',
          content: '',
          author: ''
        }
      }
    
      componentDidMount() {
        let api = new Api()

        api.posts({ 
          id: this.props.match.params.id}).then(data => {
          this.setState({
            title: data.title.rendered,
            content: data.content.rendered,
            author: data._embedded.author[0].name
          })
        })
      }

    render(){
        let post = this.state
        let id = this.props.match.params.id
        return(
            <div className="row">
                <h3>{ post.title } <small>{ post.author }</small></h3>
                <div dangerouslySetInnerHTML={{__html: post.content}} />
                <DeletePostLink id={id} />
            </div>
        )
    }
}

export default Post