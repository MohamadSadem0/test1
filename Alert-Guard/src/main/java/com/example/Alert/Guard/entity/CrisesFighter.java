package com.example.Alert.Guard.entity;
import jakarta.persistence.*;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Entity
@Table(name = "crises_fighter")
@Data
@AllArgsConstructor
@NoArgsConstructor
public class CrisesFighter {
    @Id
    private Long userId;
    @ManyToOne
    @JoinColumn(name = "category_id")
    private Category category;
    @OneToOne
    @JoinColumn(name = "user_id")
    private User user;
}