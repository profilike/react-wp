import React, { Component } from 'react'
import './App.css'

import { Switch, Route } from 'react-router-dom'
import PostList  from './components/PostList'
import Post from './components/Post'
import SiteNav from './components/SiteNav'
import CategoryPosts from './components/CategoryPosts'
import { LoginForm } from './auth'

class App extends Component {

  render() {
    return (
      <div className='App'>
        <div className='container'>
          <SiteNav />
          <h1>Welcome to Headless Wordpress!</h1>
          <Switch>
              <Route exact path="/" component={ PostList } />
              <Route exact path="/post/:id" component={ Post } />
              <Route path="/category/:id" component={CategoryPosts} />
              <Route path="/login" component={LoginForm} />
          </Switch>
        </div>
      </div>
    );
  }
}

export default App;
