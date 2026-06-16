import React from 'react';
import { styled } from '@mui/material/styles';
import Paper from '@mui/material/Paper';
import Grid from '@mui/material/Grid';
import Words from './components/Words';
import Sentences from './components/Sentences';
import Paragraphs from './components/Paragraphs';
import Text from './components/Text';
import Email from './components/Email';
import Domain from './components/Domain';
import Password from './components/Password';
import UserName from './components/UserName';
import Url from './components/Url';
import Slug from './components/Slug';
import Ip from './components/Ip';
import MacAddress from './components/MacAddress';

const Item = styled(Paper)(({ theme }) => ({
    backgroundColor: '#fff', ...theme.typography.body2, padding: theme.spacing(2), 
    textAlign: 'center', 
    color: (theme.vars ?? theme).palette.text.secondary,
    ...theme.applyStyles('dark', {backgroundColor: '#1A2027'}),
}));

function InternetPage({pathname}) {

    const getContent = (value) => {

        if (value === '/internet/email') {

            localStorage.setItem('location', value);
            return <Email name="Email" />;
        }

        if (value === '/internet/domain') {

            localStorage.setItem('location', value);
            return <Domain name="Domain" />;
        }

        if (value === '/internet/password') {

            localStorage.setItem('location', value);
            return <Password name="Password" />;
        }

        if (value === '/internet/userName') {

            localStorage.setItem('location', value);
            return <UserName name="UserName" />;
        }

        if (value === '/internet/url') {

            localStorage.setItem('location', value);
            return <Url name="Url" />;
        }

        if (value === '/internet/slug') {

            localStorage.setItem('location', value);
            return <Slug name="Slug" />;
        }

        if (value === '/internet/ip') {

            localStorage.setItem('location', value);
            return <Ip name="Ip" />;
        }

        if (value === '/internet/macAddress') {

            localStorage.setItem('location', value);
            return <MacAddress name="MacAddress" />;
        }
    }

    return (
        <Grid size={8}>
            <Item>
                {getContent(pathname)}
            </Item>
        </Grid>
    );
}

export default InternetPage;
