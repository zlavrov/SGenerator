import React from 'react';
import { styled } from '@mui/material/styles';
import Paper from '@mui/material/Paper';
import Grid from '@mui/material/Grid';
import Words from './components/Words';
import Sentences from './components/Sentences';
import Paragraphs from './components/Paragraphs';
import Text from './components/Text';

const Item = styled(Paper)(({ theme }) => ({
    backgroundColor: '#fff', ...theme.typography.body2, padding: theme.spacing(2), 
    textAlign: 'center', 
    color: (theme.vars ?? theme).palette.text.secondary,
    ...theme.applyStyles('dark', {backgroundColor: '#1A2027'}),
}));

function LoremPage({pathname}) {

    const getContent = (value) => {

        if (value === '/lorem/words') {

            localStorage.setItem('location', value);
            return <Words />;
        }

        if (value === '/lorem/sentences') {

            localStorage.setItem('location', value);
            return <Sentences />;
        }

        if (value === '/lorem/paragraphs') {

            localStorage.setItem('location', value);
            return <Paragraphs />;
        }

        if (value === '/lorem/text') {

            localStorage.setItem('location', value);
            return <Text />;
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

export default LoremPage;
