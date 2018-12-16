"use strict";var VideosLatest=React.createClass({displayName:"VideosLatest",getInitialState:function(){return{items:[],pageToken:null,loading:!1}},loadVideosFromServer:function(){this.setState({loading:!0}),$.ajax({url:"/json/youtube/list"+(null!=this.state.pageToken?"?token="+this.state.pageToken:""),data:{_token:$('meta[name="csrf-token"]').attr("content")},method:"POST",dataType:"json",cache:!1,success:function(e){this.setState({items:this.state.items.concat(e.items),pageToken:e.nextPageToken,loading:!1})}.bind(this),error:function(e,t,a){}.bind(this)})},componentDidMount:function(){this.loadVideosFromServer()},render:function(){var e;e=this.state.items.map(function(e,t){var a={backgroundImage:"url(https://img.youtube.com/vi/"+e.id.videoId+"/sddefault.jpg)"},a={backgroundImage:"url("+e.snippet.thumbnails.high.url+")"},s={year:"numeric",month:"short",day:"numeric"},i=new Date(e.snippet.publishedAt);return this.props.details?React.createElement("div",{className:"videos-content-video videos-content-video-details col-sm-6 col-md-4",key:t},React.createElement("div",{className:"row"},React.createElement("div",{className:"col-xs-6 col-sm-12 videos-content-video-details-thumbnail"},React.createElement("a",{href:"/videos/"+e.id.videoId},React.createElement("img",{src:"/build/assets/images/rect-169.png",style:a}))),React.createElement("div",{className:"col-xs-6 col-sm-12 videos-content-video-details-meta"},React.createElement("p",{className:"videos-content-video-title videos-content-video-details-title"},React.createElement("a",{href:"/videos/"+e.id.videoId},e.snippet.title)),React.createElement("p",{className:"videos-content-video-timestamp videos-content-video-details-timestamp"},i.toLocaleDateString("en-us",s))))):React.createElement("div",{className:"videos-content-video col-md-4 col-sm-6",key:t},React.createElement("a",{href:"/videos/"+e.id.videoId},React.createElement("img",{src:"/build/assets/images/rect-169.png",style:a})),React.createElement("p",{className:"videos-content-video-title"},React.createElement("a",{href:"/videos/"+e.id.videoId},e.snippet.title)),React.createElement("p",{className:"videos-content-video-timestamp"},i.toLocaleDateString("en-us",s)))}.bind(this));var t;return t=1==this.state.loading?React.createElement("div",{className:"videos-loadmore col-md-12"},React.createElement("i",{className:"fa fa-spinner fa-pulse"})):React.createElement("div",{className:"videos-loadmore col-md-12"},React.createElement("a",{href:"javascript:void(0);",onClick:this.loadVideosFromServer,className:"btn btn-default load-more"},"Load more")),React.createElement("div",{className:"videos-content"},React.createElement("div",{className:"row"},e),t)}});ReactDOM.render(React.createElement(VideosLatest,{details:details}),document.getElementById("videosLatest"));