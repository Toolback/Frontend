import React from 'react';
import Accordion from './components/Accordion';
import Search from './components/Search';

const items = [
  {
    title: 'What is Omp?', 
    content: 'A crypto community based on helping dogs'
  },
  {
    title: 'How can we Help ?',
    content: 'Our Plateform aim to reach thoses in need'
  },
  {
    title: 'How to join ?',
    content: 'Mint your NFT MemberShip Here !'
  }
]

export default () => {
  return (
    <div>
      <Search />
    </div>
  );
};