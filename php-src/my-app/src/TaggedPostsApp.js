import React, { Component } from 'react';
import data from './tagged_posts_file.json';
import './TaggedPostsApp.css';
import logo from './tumblr_logo.svg';
import ReactTable from "react-table";
import "react-table/react-table.css";

/**
 * Display post summary
 * 
 * @param {string} row
 * @returns {string} 
 */
const displaySummary = (row) => (
  row ? row : 'Post does not have a text!'
);

class TaggedPostsApp extends Component {
  render() {
    const posts = data;
    const url = "https://www.tumblr.com";
    return (
          <div>
            <div className='app-header'> <a href={url} target="_blank"><img src={logo} className="tumblr-logo" alt=""/></a>My Tumblr selected posts</div>
            <ReactTable
            data = {posts}
                columns={[
                  {
                    columns: [
                      {
                        Header: "ID",
                        accessor : "id",
                        Cell : props => <div className="text-style">{props.value}</div>
                      },
                      {
                        id : 'postText',
                        Header: "Text",
                        accessor:  "summary",
                        width : 500,
                        Cell: props => <a href={props.original.short_url} target="_blank" className="post-link">{displaySummary(props.value)}</a>
                      },
                      {
                        Header: "Blog Name",
                        accessor : "blog_name",
                        Cell : props => <div className="text-style">{props.value}</div>
                      },
                      {
                        Header: "Date",
                        accessor : "date",
                        Cell : props => <div className="text-style">{props.value}</div>
                      },
                      {
                        Header: "Note Count",
                        accessor : "note_count",
                        Cell : props => <div className="text-style">{props.value}</div>
                      }
                    ]
                  }
                ]}
                filterable
                defaultPageSize={10}
                className="-striped -highlight"
            />
          </div>  
    );
  }
}

export default TaggedPostsApp;
