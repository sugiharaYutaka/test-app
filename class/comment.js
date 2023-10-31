app = new Vue({  
    el: '#vueCom',
    data: {
        list_com: [

        ],
    },
    methods:{
        addComment:function(comment)
        {
            this.list_com.push(comment);
            this.comment="";
        }
    } 
})