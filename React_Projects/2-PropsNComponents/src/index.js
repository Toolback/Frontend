import React from 'react';
import ReactDOM from 'react-dom';
import CommentDetail from './CommentDetails';
import ApprovalCard from './ApprovalCard';


const App = () => {
    return (
        <div className="ui container comments">
            <ApprovalCard>
            <CommentDetail author="Sam" timeAgo ="Today at 2:25AM" content="Lorem Ipsum" avatar="./" />
            </ApprovalCard>
            <ApprovalCard>
            <CommentDetail author="Jane" timeAgo ="Today at 4:25AM" content="Lorem Ipsum1" avatar="./" />
            </ApprovalCard>
            <ApprovalCard>
            <CommentDetail author="Bob" timeAgo ="Today at 7:25AM" content="Lorem Ipsum2" avatar="./" />
            </ApprovalCard>
        </div>
    )
};

ReactDOM.render(<App />, document.querySelector('#root'));