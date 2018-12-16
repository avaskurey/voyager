"use strict";var ArticleBox=React.createClass({displayName:"ArticleBox",getInitialState:function(){return{data:[],articlesLoaded:!1,errors:[],submitting:!1,loading:!1,total:null,per_page:null,current_page:null,last_page:null,next_page_url:null,prev_page_url:null,from:null,to:null}},loadArticlesFromServer:function(){var e=$('input[name="list-type"]').attr("value");this.setState({loading:!0}),$.ajax({url:null==this.state.next_page_url?"/json/dhivehi/"+e:this.state.next_page_url,data:{_token:$('meta[name="csrf-token"]').attr("content")},method:"POST",dataType:"json",cache:!1,success:function(e){this.setState({loading:!1,data:this.state.date==[]?e.data:this.state.data.concat(e.data),total:e.total,per_page:e.per_page,current_page:e.current_page,last_page:e.last_page,next_page_url:e.next_page_url,prev_page_url:e.prev_page_url,from:e.from,to:e.to})}.bind(this),error:function(e,t,a){}.bind(this)})},componentDidMount:function(){this.loadArticlesFromServer(),window.addEventListener("scroll",this.handleScroll)},handleScroll:function(e){var t=$('input[name="list-type"]').attr("value"),a=10==this.state.current_page,r=$("footer").eq(0).offset().top-$("footer").eq(0).height();$(window).scrollTop()>r-300&&0==this.state.loading&&"latest"==t&&0==a&&this.loadArticlesFromServer()},render:function(){return React.createElement("div",null,React.createElement(ArticleList,{data:this.state.data}))}}),ArticleList=React.createClass({displayName:"ArticleList",render:function(){var e=this.props.data.map(function(e){return React.createElement(Article,{data:e,key:e.id})});return React.createElement("div",null,e)}}),Article=React.createClass({displayName:"Article",render:function(){var e=null;if(this.props.data.featured_media&&"photo"==this.props.data.featured_media.type&&(e=React.createElement("a",{href:this.props.data.tag_slug+"/"+this.props.data.id},React.createElement("img",{src:this.props.data.featured_media.image,width:"100%"}))),this.props.data.featured_media&&"youtube video"==this.props.data.featured_media.type){var t={backgroundImage:"url("+this.props.data.featured_media.image+")"};e=React.createElement("a",{href:this.props.data.tag_slug+"/"+this.props.data.id},React.createElement("div",{className:"youtube-thumb",style:t},React.createElement("img",{src:"/build/assets/images/transparent-thumb.png",width:"100%"})))}null==e&&(e=React.createElement("a",{href:this.props.data.tag_slug+"/"+this.props.data.id},React.createElement("img",{src:"/build/assets/images/placeholder_thumb.png",width:"100%"})));var a={"float":"left"},r={marginBottom:"10px"},s="";return this.props.data.comments>0&&(s=React.createElement("span",{className:"comments",style:a},this.props.data.comments)),React.createElement("div",{className:"col-md-4 col-sm-6 col-xs-6 float-right small"},React.createElement("div",{className:"row grid-view-listing"},React.createElement("div",{className:"col-sm-5 col-sm-push-7"},e),React.createElement("div",{className:"col-sm-7 col-sm-pull-5 text-right"},React.createElement("div",{className:"clearfix",style:r},React.createElement("span",{className:"time"},this.props.data.df_h),s),React.createElement("div",{className:"title"},React.createElement("a",{href:this.props.data.tag_slug+"/"+this.props.data.id},this.props.data.short_headline)))))}});ReactDOM.render(React.createElement(ArticleBox,null),document.getElementById("articleHolder"));