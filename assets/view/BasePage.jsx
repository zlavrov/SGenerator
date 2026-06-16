import React from 'react';
import { styled } from '@mui/material/styles';
import Paper from '@mui/material/Paper';
import Grid from '@mui/material/Grid';
import RandomDigit from './components/RandomDigit';
import NumberBetween from './components/NumberBetween';
import RandomNumber from './components/RandomNumber';
import RandomFloat from './components/RandomFloat';

const Item = styled(Paper)(({ theme }) => ({
    backgroundColor: '#fff', ...theme.typography.body2, padding: theme.spacing(2), 
    textAlign: 'center', 
    color: (theme.vars ?? theme).palette.text.secondary,
    ...theme.applyStyles('dark', {backgroundColor: '#1A2027'}),
}));

function BasePage({pathname}) {

    const getContent = (value) => {

        if (value === '/base/random-digits') {

            localStorage.setItem('location', value);
            return <RandomDigit name="Random Digits" />;
        }

        if (value === '/base/number-between') {

            localStorage.setItem('location', value);
            return <NumberBetween name="Number Between" />;
        }

        if (value === '/base/random-number') {

            localStorage.setItem('location', value);
            return <RandomNumber name="Random Number" />;
        }

        if (value === '/base/random-float') {

            localStorage.setItem('location', value);
            return <RandomFloat name="Random Float" />;
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

export default BasePage;
